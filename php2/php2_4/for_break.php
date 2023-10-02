<?php
    $list = array(20, -32, 50, -5, 40);
    $count = count($list);
    $sum = 0;
    for($i = 0; $i < $count; $i++){
        //배열 $list에서 값을 한 개씩 꺼냄
        $value = $list[$i];
        if($value < 0){
            $sum = "음수 {$value}가 포함되어 있어 중단했습니다";
            break;
        }else{
            $sum += $value;
        }
    }
    echo "합계 : $sum";
?>