<?php
    //익명 함수에서 사용하는 변수 설정
    $msg = "감사합니다.";
    $myFunc = function($who) use ($msg){
        echo "{$who}님 " . $msg;
    };

    $myFunc("test1");
?>