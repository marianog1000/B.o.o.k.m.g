<?php
namespace BooklyPayuLatam\Backend\Modules\Settings;

use BooklyPayuLatam\Lib;

/**
 * Class Controller
 * @package BooklyPayuLatam\Backend\Modules\Settings
 */
class Controller extends \Bookly\Lib\Base\Controller
{
    public function renderPaymentSettings()
    {
        $this->render( 'payment_settings' );
    }

}