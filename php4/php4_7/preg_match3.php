<?php
    // 검색하는 번호는 [4?-49], ?는 6~9의 번호
    $result1 = preg_match("/4[6-9]-49/u", "확실히 49-46");
    $result2 = preg_match("/4[6-9]-49/u", "아마도 46-49");
    $result3 = preg_match("/4[6-9]-49/u", "41-49?");
    /*
        /4[6-9]-49/u : 검색 범위는 앞에 45보다 크고 49를 포함한 패턴
    */
    var_dump($result1);
    var_dump($result2);
    var_dump($result3);
?>