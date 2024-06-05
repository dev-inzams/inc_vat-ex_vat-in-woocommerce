<?php
add_filter("woocommerce_get_price_suffix", "inzams_add_ex_inx_tax", 99,4);
function inzams_add_ex_inx_tax( $suffix, $product, $price, $qty){
	$suffix = "<small> ex. Vat </small> <br>" . wc_price(wc_get_price_including_tax($product)) . "<small> inc . Vat </small>";
	
	return $suffix;
}