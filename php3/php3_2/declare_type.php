<?php
    //인수는 정수
    function twice(int $var){
        $var *= 2;
        return $var;
    }

    $num = 10.8;
    $result = twice($num);
    echo "{$num}의 2배는 ", $result;
?>