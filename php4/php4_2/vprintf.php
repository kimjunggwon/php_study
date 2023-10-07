<?php
    $max = 15.69;
    $min = 11.32;
    $ave = 13.218;
    //치환할 배열
    $data = array($max, $min, $ave);
    //형식 문자열
    $format = '최댓값 %.1f, 최솟값 %.1f, 평균값 %.1f';
    //값을 치환해 표시
    vprintf($format, $data);
?>