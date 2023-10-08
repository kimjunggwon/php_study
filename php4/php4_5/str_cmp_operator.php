<?php
    function compare($a, $b){
        if($a < $b){
            echo "{$a}, {$b}순 \n";
        }else if($a == $b){
            echo "{$a}과 {$b}은 같다.\n";
        }else if($a > $b){
            echo "{$b}, {$a}순 \n";
        }
    }
    compare("apple", "apple");
    compare("apple", "beatles");
    compare("apple", "android");
    compare("apple", "APPLE");
?>