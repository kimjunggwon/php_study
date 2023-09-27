<?php
    $a = mt_rand(0, 50);
    $b = mt_rand(0, 50);
    if($a > $b){
        $bigger = $a;
    }else{
        $bigger = $b;
    }
    echo "큰 값은 {$bigger}, \$a는 {$a}, \$b는 {$b}";
?>