
<?php
/*
 * Plugin Name: woocommerce add content after single product summary
 */
function acbsps_custom_text() {
    echo'</br>this text is added after single product summary'
   ;
}
add_action( 'woocommerce_after_single_product_summary', 'acbsps_custom_text' );
?>