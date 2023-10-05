<?php
    // oneUp 함수에서 $var 변수명으로 값을 받음
    function oneUp($var){
        $var += 1;
    }

    $num = 5;
    // $var가 아닌 $num 인수로 설정
    oneUp($num);
    echo $num;
?>