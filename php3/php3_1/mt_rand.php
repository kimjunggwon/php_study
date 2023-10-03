<?php
    for($i = 1; $i <= 10; $i++){
        //1 ~ 100 사이에 정수 한 개를 mt_rand() 함수로 만들고 $num에 대입
        $num = mt_rand(1, 100);
        echo "{$num}, ";
    }
?>