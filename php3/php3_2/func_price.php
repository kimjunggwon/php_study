<?php
    function price($unitPrice, $quantity){
        $shippingfee = 2500;
        $deleveryfee = $unitPrice * $quantity;
        //10,000원 미만은 배송비 2,500원
        if($deleveryfee < 10000){
            $deleveryfee += $shippingfee;
        }
        return $deleveryfee;
    }
?>
<?php
    //4,000원짜리를 두 개 구입
    $price1 = price(4000, 2);
    //2,500원짜리를 다섯 개 구입
    $price2 = price(2500, 5);
    echo "금액 1은 {$price1}원" . "<br>" . PHP_EOL;
    echo "금액 2는 {$price2}원";
?>