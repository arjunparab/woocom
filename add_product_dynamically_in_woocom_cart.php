<?php
add_action( 'template_redirect', 'dy_add_product_to_cart' );
 
// add any prodct in cart programatically
function dy_add_product_to_cart() {
         
                // select ID
		$product_id = 23;
        if ( WC()->cart->get_cart_contents_count() == 0 ) 
		{
            WC()->cart->add_to_cart( $product_id );
        }
		
}
?>