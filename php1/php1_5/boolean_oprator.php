<?php
    $test1 = TRUE;
    $test2 = FALSE;
    $result1 = $test1 && $test2;
    $result2 = $test1 || $test2;
    $result3 = !$test1;
    var_dump($result1);
    var_dump($result2);
    var_dump($result3);
?>