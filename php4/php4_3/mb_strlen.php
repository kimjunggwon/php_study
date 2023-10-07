<?php
    //문자 수에 따라 요금을 계산하는 함수
    function price($str){
        $price = 3000;
        //문자의 수 확인
        $length = mb_strlen($str);
        //10문자를 넘는 첫 번째 문자 부터 한 문자당 100원 증가
        if($length > 10){
            $price += ($length - 10) * 100;
        }
        //세 자릿수
        $price = number_format($price);
        $result = "{$length}문자 {$price}원";
        return $result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>문자 수에 따라 요금을 계산</title>
</head>
<body>
    <?php
        $msg1 = "Hello world!";
        $msg2 = "안녕";
        echo price($msg1);
        echo "\n";
        echo price($msg2);
    ?>
</body>
</html>