<?php
    $a = mt_rand(0, 50);
    $b = mt_rand(0, 50);
    // mt_rand() : 난수 생성
    // 0 ~ 50 사이에 난수 생성
    $bigger = ($a > $b) ? $a : $b;
    echo "큰 값은 {$bigger}, \$a는 {$a}, \$b는 {$b}";
?>