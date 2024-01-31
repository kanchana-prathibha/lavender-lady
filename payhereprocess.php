<?php


$tot =  $_GET['tot'];
$amount = $tot;
$merchant_id = "1224788";
$order_id = uniqid();
$merchant_secret = "MjcxNTUzNTExNDMyMjU4OTgyMzIxMDkwNTI3NTAzMjAzMzAxODIx";
$currency = "LKR";

$hash = strtoupper(
    md5(
        $merchant_id . 
        $order_id . 
        number_format($amount, 2, '.', '') . 
        $currency .  
        strtoupper(md5($merchant_secret)) 
    ) 
);
$array = [];

$array["amount"] = $amount;
$array["merchant_id"] = $merchant_id;
$array["order_id"] = $order_id;
$array["currency"] = $currency;
$array["hash"] = $hash;

$jsonObj = json_encode($array);


echo $jsonObj;

// require_once 'checkout.php';

// $user = new Orders();
// $tot = $user->gettotalprice($cid);
// // $rs = $user->getdetails();
// // foreach ($rs as $rows_order) {
// //     $price = $rows_order['price'];
// //     $quantity = $rows_order['quantity'];
// //     $total = $quantity * $price;
// // }