<?php
    // 검색하는 패턴은 [4?-49]
    $result1 = preg_match("/4.-49/u", "확실히 49-46");
    $result2 = preg_match("/4.-49/u", "아마도 46-49");
    $result3 = preg_match("/4.-49/u", "41-49?");
    /*
        /4.-49/ : 일부가 분명하지 않을 때
    */
    var_dump($result1);
    var_dump($result2);
    var_dump($result3);
?>