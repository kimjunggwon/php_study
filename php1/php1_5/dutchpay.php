<?php
    $amount = 54750;
    $rest = $amount % 4;
    $person = ($amount - $rest) / 4;
    echo "1인 {$person}원, 부족 {$rest}원";
?>