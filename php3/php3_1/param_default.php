<?php
    //$days에 1을 설정
    function charge($grade, $days = 1){
        switch($grade){
            case "A":
                $price = 15000 * $days;
                break;
            case "B":
                $price = 12000 * $days;
                break;
            default:
                $price = 8000 * $days;
                break;
        }
        return $price;
    }
?>
<?php
    //B등급이 2박인 경우
    $price1 = charge("B", 2);
    //A등급의 숙박일 수가 생략된 경우
    $price2 = charge("A");
    echo "금액 1은 {$price1}원" . "<br>" . PHP_EOL;
    echo "금액 2는 {$price2}원";
?>