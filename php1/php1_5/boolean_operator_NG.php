<?php
    $test1 = TRUE;
    $test2 = FALSE;
    $result1 = $test1 and $test2;
    $result2 = $test1 || $test2;
    var_dump($result1);
    var_dump($result2);
    /*
        $result1, $result2 변수에 $test1에 값만 동작
        즉, ()로 묶어줘야 논리 연산
    */
?>