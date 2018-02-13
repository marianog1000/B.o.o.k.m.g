<?php
namespace Bookly\Lib\Entities;

use Bookly\Lib;

class StaffPreferenceOrder extends Lib\Base\Entity
{
    protected static $table = 'ab_staff_preference_orders';

    protected static $schema = array(
        'id'         => array( 'format' => '%d' ),
        'service_id' => array( 'format' => '%d', 'reference' => array( 'entity' => 'Service' ) ),
        'staff_id'   => array( 'format' => '%d', 'reference' => array( 'entity' => 'Staff' ) ),
        'position'   => array( 'format' => '%d', 'default' => 9999 ),
    );

    protected static $cache = array();

}