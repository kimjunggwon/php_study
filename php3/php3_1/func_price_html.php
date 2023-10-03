<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>사용자 정의 함수</title>
</head>
<body>
    4,000원짜리를 2개 구입할 때 금액은
    <?php
        $price1 = price(4000, 2);
        echo "{$price1}원"
    ?>
    <br>
    2,500원짜리를 5개 구입할 때의 금액은
    <?php
        $price2 = price(2500, 5);
        echo "{$price2}원";
    ?>
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
</body>
</html>