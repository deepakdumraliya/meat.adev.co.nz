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

$data = [
    'overweight' => $cart->isOverweight($region),
    'maxWeight' => $region->maxWeight() 
];

header("Content-type: application/json");
echo json_encode($data);
exit;