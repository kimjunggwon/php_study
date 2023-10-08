<?php
    $search = ["김팀장", "26세"];
    $replace = ["A", "x세"];
    $subject = "담당은 김팀장입니다. 김팀장은(는) 26세 남성입니다.";
    $result = str_replace($search, $replace, $subject);
    echo "바꾸기 전 : {$subject}", "\n";
    echo "바꾼 후 : {$result}";
?>