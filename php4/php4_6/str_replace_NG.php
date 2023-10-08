<?php
    $search = ["XG", "P10"];
    $replace = ["XP", "P10a"];
    $subject = "XG90, XG100, P10, P15";
    $result = str_replace($search, $replace, $subject);
    echo "바꾸기 전 : {$subject}", "\n";
    echo "바꾼 후 : {$result}";
?>