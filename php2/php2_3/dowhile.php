<?php
    do {
        $a = mt_rand(1, 13);
        $b = mt_rand(1, 13);
        $c = mt_rand(1, 13);
        $abc = $a + $b + $c;
        if($abc == 21){
            break;
        }
    }while(TRUE);
    echo "합계가 21이 되는 3개의 숫자. {$a}, {$b}, {$c}";
?>