<?php
	add_action('woocommerce_after_cart', 'sample', 1);

function sample() {
   
    $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
	 echo ' <a href="'.$shop_page_url.'" class="checkout-button button alt " style="width:250px; float: left;">Continue Shopping </a>';

	echo '<a href="' . esc_url( WC()->cart->get_checkout_url() ) . '" class="checkout-button button alt wc-forward" style="width:250px;float: right;" >' . __( 'Proceed to Checkout', 'woocommerce' ) . '</a>';
}
?>