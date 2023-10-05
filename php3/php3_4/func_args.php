<?php
    function myFunc(){
        // 모든 인수
        $allArgs = func_get_args();
        // 인수 값의 합계
        $total = array_sum($allArgs);
        // 인수의 개수
        $numArgs = func_num_args();
        if($numArgs > 0){
            $averge = $total / $numArgs;
            // 마지막 값을 꺼냄
            $lastValue = func_get_arg($numArgs - 1);
        }else{
            $lastValue = $averge = $total = "(데이터없음)";
        }

        echo "합계 ", $total, "\n";
        echo "평균 ", $averge, "\n";
        echo "마지막 점수 ", $lastValue, "\n";
    }

    myFunc(43, 67, 55, 75);
?>