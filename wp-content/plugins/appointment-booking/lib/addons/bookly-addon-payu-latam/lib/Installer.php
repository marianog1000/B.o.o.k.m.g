<?php
namespace BooklyPayuLatam\Lib;

/**
 * Class Installer
 * @package BooklyPayuLatam\Lib
 */
class Installer extends \Bookly\Lib\Base\Installer
{
    public function __construct()
    {
        // Load l10n for fixtures creating.
        load_plugin_textdomain( Plugin::getTextDomain(), false, Plugin::getSlug() . '/languages' );

        $this->options = array(
            'bookly_pmt_payu_latam'             => get_option( 'bookly_pmt_payu_latam', 'disabled' ),
            'bookly_payu_latam_api_key'         => get_option( 'bookly_pmt_payu_latam_api_key' ),
            'bookly_payu_latam_api_account_id'  => get_option( 'bookly_pmt_payu_latam_api_account_id' ),
            'bookly_payu_latam_api_merchant_id' => get_option( 'bookly_pmt_payu_latam_api_merchant_id' ),
            'bookly_payu_latam_sandbox'         => get_option( 'bookly_pmt_payu_latam_sandbox', '0' ),
        );
        $deprecated = array(
            'bookly_pmt_payu_latam_api_key',
            'bookly_pmt_payu_latam_api_account_id',
            'bookly_pmt_payu_latam_api_merchant_id',
            'bookly_pmt_payu_latam_sandbox',
        );
        foreach ( $deprecated as $option_name ) {
            delete_option( $option_name );
        }
    }

}