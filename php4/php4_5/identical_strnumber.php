<?php
    function check($a, $b){
        if($a === $b){
            echo "{$a}와(과) {$b}은(는)", " 같다\n";
        }else{
            echo "{$a}와(과) {$b}은(는)", " 다르다\n";
        }
    }
    check("7cm", "7cm");
    check("7km", "7cm");
    check("7명", 7);
    check("PHP7", 7);
    check("칠", 0);
?>