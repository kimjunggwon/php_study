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
    compare("120", 99);
    compare("A5", 0);
    $num = 99;
    compare("A5", (string)$num);
?>