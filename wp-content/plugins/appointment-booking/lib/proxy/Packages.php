<?php
namespace Bookly\Lib\Proxy;

use Bookly\Lib\Base;

/**
 * Class Packages
 * Invoke local methods from Packages add-on.
 *
 * @package Bookly\Lib\Proxy
 *
 * @method static void renderServicePackage( array $service, array $service_collection, $sub_services ) Render sub services for packages
 * @see \BooklyPackages\Lib\ProxyProviders\Local::renderServicePackage()
 */
class Packages extends Base\ProxyInvoker
{

}