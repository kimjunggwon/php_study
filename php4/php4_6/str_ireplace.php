<?php
    $subject = "Apple Pie";
    $result = str_ireplace("p", "?", $subject, $count);
    echo "바꾸기 전 : {$subject}", "\n";
    echo "바꾼 후 : {$result}", "\n";
    echo "개수 : {$count}";
?>