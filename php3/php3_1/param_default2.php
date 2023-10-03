<?php
    ini_set('display_errors', 1);
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
    //등급과 숙박일 수가 모두 생략된 경우
    $price3 = charge();
    echo "금액 3은 {$price3}원";
?>