<?php
    //세금
    $tax = 0.1;

    function taxPrice($unitPrice, $quantity){
        $price = $unitPrice * $quantity * (1 + $tax);
        echo "{$price}원입니다.";
    }

    taxPrice(250, 4);
    echo "부가세 ". $tax * 100, "%";
?>