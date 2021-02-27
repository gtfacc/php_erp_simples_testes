<?php

$amount_value="amount";
$produtc_value1="product1";
$produtc_value2="product2";
$a="";
function calculate_price ($amount_value,$produtc_value1,$produtc_value2){
    $a=($produtc_value1+$produtc_value2)/$amount_value;
    return $a ;
}

