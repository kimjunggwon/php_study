<?php
    function compareStr($a, $b){
        //문자열로 형 변환해 비교
        $result = strcmp($a, $b);
        if($result < 0){
            echo "{$a}, {$b}순 \n";
        }else if($result === 0){
            echo "{$a}과 {$b}은 같다 \n";
        }else if($result > 0){
            echo "{$b}, {$a}순 \n";
        }
    }
    compareStr("123", 99);
    compareStr("A123", 99);
    compareStr("009", 99);
?>