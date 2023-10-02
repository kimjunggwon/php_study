<?php
    //빈 배열 생성
    $numArray = array();
    while(count($numArray) < 5){
        //1~30 범위에 난수를 한 개 생성
        $num = mt_rand(1, 30);
        //$numArray에 포함되어 있는지 조사
        if(!in_array($num, $numArray)){
            //$numArray에 포함되어 있지 않으면 추가
            array_push($numArray, $num);
        }
    }
    //숫자가 다섯 개 들어간 배열을 확인
    print_r($numArray);
?>