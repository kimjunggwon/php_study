<?php
    $sex = "man";
    $age = 26;
    if($sex == "man"){
        if(($age >= 20) && ($age < 30)){
            echo "합격";
        }else{
            echo "나이 불합격";
        }
    }else{
        echo "성별 불합격";
    }

?>