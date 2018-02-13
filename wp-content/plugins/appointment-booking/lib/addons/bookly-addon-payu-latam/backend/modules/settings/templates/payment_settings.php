<?php if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly
use Bookly\Lib\Utils\Common;
?>
<div class="panel panel-default">
    <div class="panel-heading">
        <label for="bookly_pmt_payu_latam">PayU Latam</label>
        <img class="pull-right" src="<?php echo plugins_url( 'frontend/resources/images/payu_latam.png', \BooklyPayuLatam\Lib\Plugin::getMainFile() ) ?>"/>
    </div>
    <div class="panel-body">
        <?php Common::optionToggle( 'bookly_pmt_payu_latam', null, null, array( array( 'disabled', __( 'Disabled', 'bookly' ) ), array( '1', __( 'Enabled', 'bookly' ) ) ) ) ?>
        <div class="bookly-payu_latam">
            <?php Common::optionText( 'bookly_payu_latam_api_key', __( 'API Key', 'bookly-payu-latam' ) ) ?>
            <?php Common::optionText( 'bookly_payu_latam_api_account_id', __( 'Account ID', 'bookly-payu-latam' ) ) ?>
            <?php Common::optionText( 'bookly_payu_latam_api_merchant_id', __( 'Merchant ID', 'bookly-payu-latam' ) ) ?>
            <?php Common::optionToggle( 'bookly_payu_latam_sandbox', __( 'Sandbox Mode', 'bookly' ), null, array( array( 0, __( 'No', 'bookly' ) ), array( 1, __( 'Yes', 'bookly' ) ) ) ) ?>
        </div>
    </div>
</div>