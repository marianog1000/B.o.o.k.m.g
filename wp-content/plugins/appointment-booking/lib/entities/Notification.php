<?php
namespace Bookly\Lib\Entities;

use Bookly\Lib;

/**
 * Class Notification
 * @package Bookly\Lib\Entities
 */
class Notification extends Lib\Base\Entity
{
    protected static $table = 'ab_notifications';

    protected static $schema = array(
        'id'      => array( 'format' => '%d' ),
        'gateway' => array( 'format' => '%s', 'default' => 'email' ),
        'type'    => array( 'format' => '%s', 'default' => '' ),
        'active'  => array( 'format' => '%d', 'default' => 0 ),
        'copy'    => array( 'format' => '%d', 'default' => 0 ),
        'subject' => array( 'format' => '%s', 'default' => '' ),
        'message' => array( 'format' => '%s', 'default' => '' ),
    );

    protected static $cache = array();

    /** @var array  Human readable notification names */
    public static $names = null;

    /** @var array */
    public static $type_ids = null;

    /**
     * Save entity.
     *
     * @return false|int
     */
    public function save()
    {
        $return = parent::save();
        if ( $this->isLoaded() ) {
            // Register string for translate in WPML.
            do_action( 'wpml_register_single_string', 'bookly', $this->get( 'gateway' ) . '_' . $this->get( 'type' ), $this->get( 'message' ) );
            if ( $this->get( 'gateway' ) == 'email' ) {
                do_action( 'wpml_register_single_string', 'bookly', $this->get( 'gateway' ) . '_' . $this->get( 'type' ) . '_subject', $this->get( 'subject' ) );
            }
        }

        return $return;
    }

    /**
     * Get type ID.
     *
     * @return int|null
     */
    public function getTypeId()
    {
        self::initTypeIds();

        return isset ( self::$type_ids[ $this->get( 'type' ) ] )
            ? self::$type_ids[ $this->get( 'type' ) ]
            : null;
    }

    /**
     * Get type string for given type ID.
     *
     * @param int $type_id
     * @return string|null
     */
    public static function getTypeString( $type_id )
    {
        self::initTypeIds();

        return array_search( $type_id, self::$type_ids ) ?: null;
    }

    /**
     * Notification name.
     *
     * @param $type
     * @return string
     */
    public static function getName( $type = null )
    {
        self::initNames();

        if ( array_key_exists( $type, self::$names ) ) {
            return self::$names[ $type ];
        } else {
            return __( 'Message', 'bookly' );
        }
    }

    /**
     * Fill array with notification names.
     */
    private static function initNames()
    {
        if ( self::$names === null ) {
            self::$names = array(
                'client_approved_appointment'      => __( 'Notification to customer about approved appointment', 'bookly' ),
                'client_approved_appointment_cart' => __( 'Notification to customer about approved appointments', 'bookly' ),
                'client_cancelled_appointment'     => __( 'Notification to customer about cancelled appointment', 'bookly' ),
                'client_rejected_appointment'      => __( 'Notification to customer about rejected appointment', 'bookly' ),
                'client_follow_up'                 => __( 'Follow-up message in the same day after appointment (requires cron setup)', 'bookly' ),
                'client_new_wp_user'               => __( 'Notification to customer about their WordPress user login details', 'bookly' ),
                'client_pending_appointment'       => __( 'Notification to customer about pending appointment', 'bookly' ),
                'client_pending_appointment_cart'  => __( 'Notification to customer about pending appointments', 'bookly' ),
                'client_reminder'                  => __( 'Evening reminder to customer about next day appointment (requires cron setup)', 'bookly' ),
                'client_reminder_1st'              => __( '1st reminder to customer about upcoming appointment (requires cron setup)', 'bookly' ),
                'client_reminder_2nd'              => __( '2nd reminder to customer about upcoming appointment (requires cron setup)', 'bookly' ),
                'client_reminder_3rd'              => __( '3rd reminder to customer about upcoming appointment (requires cron setup)', 'bookly' ),
                'client_birthday_greeting'         => __( 'Customer birthday greeting (requires cron setup)', 'bookly' ),
                'staff_agenda'                     => __( 'Evening notification with the next day agenda to staff member (requires cron setup)', 'bookly' ),
                'staff_approved_appointment'       => __( 'Notification to staff member about approved appointment', 'bookly' ),
                'staff_cancelled_appointment'      => __( 'Notification to staff member about cancelled appointment', 'bookly' ),
                'staff_rejected_appointment'       => __( 'Notification to staff member about rejected appointment', 'bookly' ),
                'staff_pending_appointment'        => __( 'Notification to staff member about pending appointment', 'bookly' ),
                /** @see \Bookly\Backend\Modules\Sms\Controller::executeSendTestSms */
                'test_message'                     => __( 'Test message', 'bookly' ),
            );

            self::$names = Lib\Proxy\Shared::prepareNotificationNames( self::$names );
        }
    }

    /**
     * Fill array of type ids.
     */
    private static function initTypeIds()
    {
        if ( self::$type_ids === null ) {
            self::$type_ids = array(
                /** @see \Bookly\Backend\Modules\Sms\Controller::executeSendTestSms */
                'test_message'                     => 0,

                'client_approved_appointment'      => 1,
                'client_approved_appointment_cart' => 2,
                'client_cancelled_appointment'     => 3,
                'client_follow_up'                 => 4,
                'client_new_wp_user'               => 5,
                'client_pending_appointment'       => 6,
                'client_pending_appointment_cart'  => 7,
                'client_reminder'                  => 8,
                'staff_agenda'                     => 9,
                'staff_approved_appointment'       => 10,
                'staff_cancelled_appointment'      => 11,
                'staff_pending_appointment'        => 12,
                'client_rejected_appointment'      => 13,
                'staff_rejected_appointment'       => 14,
                'client_birthday_greeting'         => 15,
                'client_reminder_1st'              => 16,
                'client_reminder_2nd'              => 17,
                'client_reminder_3rd'              => 18,
                // Recurring Appointments add-on   => [31-38],
                // Waiting List add-on             => [51-53],
            );

            self::$type_ids = Lib\Proxy\Shared::prepareNotificationTypeIds( self::$type_ids );
        }
    }
}