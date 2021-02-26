<?php

require("../views/precification/index.php");

$amount= 3;
$produtc_value1="product1";
$produtc_value2="product1";

function calculate_price ($produtc_value1,$produtc_value2){
    $product_price=($produtc_value1+$produtc_value2)/$amount;
    return $product_price;
}

