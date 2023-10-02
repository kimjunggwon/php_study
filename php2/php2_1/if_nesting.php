<?php
    $math = 85;
    $eng = 67;
    if($math >= 60){
        if($eng >= 60){
            echo "합격";
        }else{
            echo "불합격";
        }
    }else{
        echo "불합격";
    }
?>