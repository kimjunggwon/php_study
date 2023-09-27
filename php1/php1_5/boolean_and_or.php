<?php
    $test1 = TRUE;
    $test2 = FALSE;
    $result1 = ($test1 and $test2);
    $result2 = ($test1 || $test2);
    var_dump($result1);
    var_dump($result2);
?>