<?php
namespace Bookly\Backend\Modules\Message;

use Bookly\Lib;

/**
 * Class Controller
 * @package Bookly\Backend\Modules\Message
 */
class Controller extends Lib\Base\Controller
{
    const page_slug = 'bookly-messages';

    /**
     * Default action
     */
    public function index()
    {
        $this->enqueueStyles( array(
            'backend' => array( 'bootstrap/css/bootstrap-theme.min.css', ),
        ) );

        $this->enqueueScripts( array(
            'backend' => array( 'bootstrap/js/bootstrap.min.js' => array( 'jquery' ) ),
        ) );

        $message_ids  = array();
        $messages     = Lib\Entities\Message::query( 'm' )->select( 'm.created, m.subject, m.seen, m.body' )->sortBy( 'id' )->order( 'DESC' )->fetchArray();
        $new_messages = Lib\Entities\Message::query( 'm' )->select( 'm.message_id' )->where( 'm.seen', '0' )->fetchArray();
        foreach ( $new_messages as $message ) {
            $message_ids[] = $message['message_id'];
        }
        Lib\API::seenMessages( $message_ids );

        $this->render( 'index', compact( 'messages' ) );
    }

    /**
     * Mark all messages was read
     */
    public function executeMarkReadAllMessages()
    {
        $messages = Lib\Entities\Message::query( 'm' )->select( 'm.message_id' )->whereNot( 'm.seen', 1 )->fetchArray();
        $message_ids = array();
        foreach ( $messages as $message ) {
            $message_ids[] = $message['message_id'];
        }

        Lib\API::seenMessages( $message_ids );
        wp_send_json_success();
    }

}