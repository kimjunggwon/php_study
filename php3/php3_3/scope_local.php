<?php
    //개 수
    $quantity = 2;

    function price(){
        //$price 변수에 $quantity는 price() 내부에서만 사용이 가능
        //결과는 오류
        $price = 250 * $quantity;
        echo " {$price}원입니다.";
    }

    echo "{$quantity}개에";
    price();
?>