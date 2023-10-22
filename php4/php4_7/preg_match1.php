<?php
    // 검색하는 패턴은 [46-49]
    $result1 = preg_match("/46-49/u", "확실히 49-46");
    $result2 = preg_match("/46-49/u", "아마도 46-49");
    $result3 = preg_match("/46-49u", "49-46");
    /*
    /46-49/ : 46과 49 범위 포함
    u : UTF-8 일치
    */
    var_dump($result1);
    var_dump($result2);
    var_dump($result3);
?>