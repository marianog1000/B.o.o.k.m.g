<?php
namespace Bookly\Lib\Proxy;

use Bookly\Lib;

/**
 * Class WaitingList
 * Invoke local methods from Waiting List add-on.
 *
 * @package Bookly\Lib\Proxy
 *
 * @method static void handleParticipantsChange( Lib\Entities\Appointment $appointment ) Handle the change of participants of given appointment
 * @see \BooklyWaitingList\Lib\ProxyProviders\Local::handleParticipantsChange()
 */
class WaitingList extends Lib\Base\ProxyInvoker
{

}