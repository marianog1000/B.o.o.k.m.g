<?php
namespace Bookly\Lib\Entities;

use Bookly\Lib;

/**
 * Class Message
 * @package Bookly\Lib\Entities
 */
class Message extends Lib\Base\Entity
{
    protected static $table = 'ab_messages';

    protected static $schema = array(
        'id'         => array( 'format' => '%d' ),
        'message_id' => array( 'format' => '%d' ),
        'type'       => array( 'format' => '%s' ),
        'subject'    => array( 'format' => '%s' ),
        'body'       => array( 'format' => '%s' ),
        'seen'       => array( 'format' => '%d', 'default' => 0 ),
        'created'    => array( 'format' => '%s' ),
    );

    protected static $cache = array();

}