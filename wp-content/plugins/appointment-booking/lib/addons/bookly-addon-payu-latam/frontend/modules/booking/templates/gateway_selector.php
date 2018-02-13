<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly ?>
<div class="bookly-box bookly-list">
    <label>
        <input type="radio" class="bookly-payment" name="payment-method-<?php echo $form_id ?>" value="payu_latam"/>
        <span><?php echo \Bookly\Lib\Utils\Common::getTranslatedOption( 'bookly_l10n_label_pay_ccard' ) ?></span>
        <img src="<?php echo $url_cards_image ?>" alt="cards" />
    </label>
    <?php if ( $payment['gateway'] == Bookly\Lib\Entities\Payment::TYPE_PAYULATAM && $payment['status'] == 'error' ) : ?>
        <div class="bookly-label-error" style="padding-top: 5px;">* <?php echo $payment['data'] ?></div>
    <?php endif ?>
</div>