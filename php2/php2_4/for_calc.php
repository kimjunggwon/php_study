<?php
    $price = 0;
    for($number = 1; $number <= 6; $number++){
        if($number <= 3){
            $price += 1000;
        }else{
            $price += 500;
        }
        echo "{$number}명, {$price}원. ";
    }
?>