<?php
    //대입문이므로 세미콜론은 필수
    $myFunc = function($who){
        echo "{$who}님 안녕하세요.";
    };

    $myFunc("test1");
?>