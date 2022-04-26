<?php 

use Cart\Cart;
use Orders\ShippingRegion;

require_once $_SERVER['DOCUMENT_ROOT'].'/admin/scripts-includes/'.'universal.php';

$cart = Cart::get();
$region = ShippingRegion::load($_GET['shippingRegionId']);
if ($region->isNull()) 
{
	$region = $cart->shippingRegion;
}

echo $cart->outputShippingEnquiryForm($region);
exit;