<?php
    function hello($who){
        echo "{$who}님, 안녕하세요";
    }

    function bye($who){
        echo "{$who}님, 잘 가요";
    }

    $msg = "bye";
    if(function_exists($msg)){
        $msg("test1");
    }
?>