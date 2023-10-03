<?php
    $distance = 20;
    //각도를 라디안으로 변환
    $angle = 32 * pi() / 180;
    $height = $distance * tan($angle);
    $height = round($height * 10) / 10;

    echo "나무 높이는 {$height}m 입니다.";
?>