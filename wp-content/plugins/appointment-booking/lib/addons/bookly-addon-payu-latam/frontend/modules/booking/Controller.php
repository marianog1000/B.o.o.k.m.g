<?php
namespace BooklyPayuLatam\Frontend\Modules\Booking;

use Bookly\Lib;

/**
 * Class Controller
 * @package BooklyPayuLatam\Frontend\Modules\PayuLatam
 */
class Controller extends Lib\Base\Controller
{

    public function renderPaymentGatewaySelector( $form_id, $payment )
    {
        $url_cards_image = plugins_url( 'frontend/resources/images/cards.png', Lib\Plugin::getMainFile() );
        $this->render( 'gateway_selector', compact( 'form_id', 'payment', 'url_cards_image' ) );
    }

    public function renderPaymentGatewayForm( $form_id, $page_url )
    {
        $this->render( 'gateway_form', compact( 'form_id', 'page_url' ) );
    }
}