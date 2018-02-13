<?php
namespace BooklyPayuLatam\Lib\ProxyProviders;

use BooklyPayuLatam\Lib;
use BooklyPayuLatam\Backend\Modules as Backend;
use BooklyPayuLatam\Frontend\Modules as Frontend;

/**
 * Class Shared
 * Provide shared methods to be used in Bookly.
 *
 * @package BooklyPayuLatam\Lib\ProxyProviders
 */
abstract class Shared extends \Bookly\Lib\Base\ProxyProvider
{

    /******************************************************************************************************************
     * FRONTEND                                                                                                       *
     ******************************************************************************************************************/

    /**
     * Process payment action.
     *
     * @param string $action
     */
    public static function handleRequestAction( $action )
    {
        if ( Lib\Plugin::enabled() ) {
            switch ( $action ) {
                case 'payu_latam-checkout':
                    Frontend\PayuLatam\Controller::getInstance()->checkout();
                    break;
                case 'payu_latam-ipn':
                    Lib\Payment\PayuLatam::ipn();
                    break;
                case 'payu_latam-error':
                    Frontend\PayuLatam\Controller::getInstance()->error();
                    break;
            }
        }
    }

    /**
     * @param string $form_id
     * @param array  $payment
     */
    public static function renderPaymentGatewaySelector( $form_id, $payment )
    {
        if ( Lib\Plugin::enabled() ) {
            Frontend\Booking\Controller::getInstance()->renderPaymentGatewaySelector( $form_id, $payment );
        }
    }

    /**
     * @param string $form_id
     * @param string $page_url
     */
    public static function renderPaymentGatewayForm( $form_id, $page_url )
    {
        if ( Lib\Plugin::enabled() ) {
            Frontend\Booking\Controller::getInstance()->renderPaymentGatewayForm( $form_id, $page_url );
        }
    }

    /******************************************************************************************************************
     * BACKEND                                                                                                        *
     ******************************************************************************************************************/

    /**
     * Render PayU Latam settings in Bookly Payments Settings.
     */
    public static function renderPaymentSettings()
    {
        Backend\Settings\Controller::getInstance()->renderPaymentSettings();
    }

    /**
     * Save settings.
     *
     * @param array  $alert
     * @param string $tab
     * @param array  $_post
     * @return array
     */
    public static function saveSettings( array $alert, $tab, $_post )
    {
        $options = array(
            'bookly_pmt_payu_latam',
            'bookly_payu_latam_api_key',
            'bookly_payu_latam_api_account_id',
            'bookly_payu_latam_api_merchant_id',
            'bookly_payu_latam_sandbox',
        );
        foreach ( $options as $option_name ) {
            if ( array_key_exists( $option_name, $_post ) ) {
                update_option( $option_name, $_post[ $option_name ] );
            }
        }

        return $alert;
    }

}