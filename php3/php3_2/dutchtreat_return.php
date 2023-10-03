<?php
    function dutchtreat($total, $number){
        //인원 수가 음수 일때는 처리를 중단
        if($number <= 0){
            return; //중단
        }

        //나눗셈 결과 표시
        $result = $total / $number;
        echo "{$total}원을 {$number}명으로 나누면 {$result}원. ";
        echo "<br>" . PHP_EOL;
    }
    //계산
    dutchtreat(2500, 2);
    dutchtreat(3000, 0);
    dutchtreat(5500, 4);
?>