<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div id="bookly-tbs" class="wrap">
    <div class="bookly-tbs-body">
        <div class="page-header text-right clearfix">
            <div class="bookly-page-title">
                <?php _e( 'Messages', 'bookly' ) ?>
            </div>
            <?php \Bookly\Backend\Modules\Support\Components::getInstance()->renderButtons( $this::page_slug ) ?>
        </div>
        <div class="panel panel-default bookly-main">
            <div class="panel-body">
                <?php foreach ( $messages as $message ) : ?>
                    <div class="row">
                        <div class="col-md-1 col-xs-4"><?php echo \Bookly\Lib\Utils\DateTime::formatDate( $message['created'] ) ?>:</div>
                        <div class="col-md-2 col-xs-8">
                            <?php if ( $message['seen'] != 1 ) : ?><b><?php endif ?>
                            <?php echo $message['subject'] ?>:
                            <?php if ( $message['seen'] != 1 ) : ?></b><?php endif ?>
                        </div>
                        <div class="col-md-9 col-xs-12"><?php echo $message['body'] ?></div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</div>