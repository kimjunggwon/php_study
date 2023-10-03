<?php
    //인자를 실수로 받고 정수로 반환
    function twice(float $var):int{
        $var *= 2;
        return $var;
    }

    $num = 10.8;
    $result = twice($num);
    echo "{$num}의 2배는 ", $result;
?>