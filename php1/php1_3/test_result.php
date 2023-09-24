<?php
    //과목 점수
    $kor = 67;
    $eng = 72;
    $math = 85;

    //총 점
    $total = $kor + $eng + $math;
    //평균
    $ave = $total / 3;
    
    echo "총점 : ", $total, "<br>";
    echo "평균 : ", $ave;
?>