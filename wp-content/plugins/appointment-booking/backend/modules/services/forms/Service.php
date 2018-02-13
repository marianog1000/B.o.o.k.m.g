<?php
namespace Bookly\Backend\Modules\Services\Forms;

use Bookly\Lib;

/**
 * Class Service
 * @package Bookly\Backend\Modules\Services\Forms
 */
class Service extends Lib\Base\Form
{
    protected static $entity_class = 'Service';

    public function configure()
    {
        $fields = array(
            'id',
            'title',
            'duration',
            'price',
            'category_id',
            'color',
            'capacity_min',
            'capacity_max',
            'padding_left',
            'padding_right',
            'package_life_time',
            'package_size',
            'info',
            'type',
            'sub_services',
            'staff_preference',
            'positions',
            'visibility',
        );

        $this->setFields( $fields );
    }

    /**
     * Bind values to form.
     *
     * @param array $_post
     * @param array $files
     */
    public function bind( array $_post, array $files = array() )
    {
        // Field with NULL
        if ( array_key_exists( 'category_id', $_post ) && ! $_post['category_id'] ) {
            $_post['category_id'] = null;
        }

        parent::bind( $_post, $files );
    }

    /**
     * @return \Bookly\Lib\Entities\Service
     */
    public function save()
    {
        if ( $this->isNew() ) {
            // When adding new service - set its color randomly.
            $this->data['color'] = sprintf( '#%06X', mt_rand( 0, 0x64FFFF ) );
        }

        if ( $this->data['type'] == Lib\Entities\Service::TYPE_SIMPLE || ! array_key_exists( 'sub_services', $this->data ) || empty( $this->data['sub_services'] ) || $this->data['sub_services'][0] == 0 ) {
            Lib\Entities\SubService::query()->delete()->where( 'service_id', $this->data['id'] )->execute();
            $this->data['sub_services'] = '[]';
        }

        $this->data = Lib\Proxy\Shared::prepareUpdateService( $this->data );

        /** @var Lib\Entities\Service $service */
        $service = parent::save();

        // Saving staff preferences for service

        /** @var Lib\Entities\StaffPreferenceOrder[] $staff_preferences */
        $staff_preferences = Lib\Entities\StaffPreferenceOrder::query()
            ->where( 'service_id', $service->get( 'id' ) )
            ->indexBy( 'staff_id' )
            ->find();
        foreach ( (array) $this->data['positions'] as $position => $staff_id ) {
            if ( array_key_exists( $staff_id, $staff_preferences ) ) {
                $staff_preferences[ $staff_id ]->set( 'position', $position )->save();
            } else {
                $preference = new Lib\Entities\StaffPreferenceOrder();
                $preference
                    ->set( 'service_id', $service->get( 'id' ) )
                    ->set( 'staff_id',   $staff_id )
                    ->set( 'position', $position )
                    ->save();
            }
        }

        return $service;
    }

}