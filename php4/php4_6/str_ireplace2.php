<?php
    //검색 문자
    $search = array("p", "e");
    //대상 문자열
    $subject = "a piece of the apple pie";
    $result = str_ireplace($search, "?", $subject, $count);
    echo "바꾸기 전 : {$subject}", "\n";
    echo "바꾼 후 : {$result}", "\n";
    echo "개수 : {$count}";
?>