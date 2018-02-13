<?php
namespace BooklyPayuLatam\Lib;

use BooklyPayuLatam\Backend\Modules;

/**
 * Class Plugin
 * @package BooklyPayuLatam\Lib
 */
abstract class Plugin extends \Bookly\Lib\Base\Plugin
{
    protected static $prefix;
    protected static $title;
    protected static $version;
    protected static $slug;
    protected static $directory;
    protected static $main_file;
    protected static $basename;
    protected static $text_domain;
    protected static $root_namespace;
    protected static $embedded;

    /**
     * Register hooks.
     */
    public static function registerHooks()
    {
        parent::registerHooks();

        // Register proxy methods.
        ProxyProviders\Local::registerMethods();
        ProxyProviders\Shared::registerMethods();
    }

    /**
     * Check if plugin is enabled (applicable to add-ons).
     *
     * @return bool
     */
    public static function enabled()
    {
        return get_option( 'bookly_pmt_payu_latam' ) == 1;
    }

    /**
     * Enable plugin (applicable to add-ons).
     */
    public static function enable()
    {
        update_option( 'bookly_pmt_payu_latam', 1 );
    }

    /**
     * Disable plugin (applicable to add-ons).
     */
    public static function disable()
    {
        update_option( 'bookly_pmt_payu_latam', 'disabled' );
    }
}