<?php
namespace Bookly\Lib\Entities;

use Bookly\Lib;

/**
 * Class SubService
 *
 * @package Bookly\Lib\Entities
 */
class SubService extends Lib\Base\Entity
{
    protected static $table = 'ab_sub_services';

    protected static $schema = array(
        'id'             => array( 'format' => '%d' ),
        'service_id'     => array( 'format' => '%d', 'reference' => array( 'entity' => 'Service' ) ),
        'sub_service_id' => array( 'format' => '%d', 'reference' => array( 'entity' => 'Service' ) ),
        'position'       => array( 'format' => '%d', 'default' => 9999 ),
    );

    protected static $cache = array();

    /** @var Service */
    public $service = null;

}