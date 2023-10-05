<?php
    $unitPrice = 230;
    $quantity = 5;
    $danga = "unitPrice";
    $gaesu = "quantity";

    $price = $$danga * $$gaesu;
    // == $price = $unitPrice * $quantity와 같음
    echo $price . "원";
?>