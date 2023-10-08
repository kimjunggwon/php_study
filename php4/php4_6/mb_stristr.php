<?php
    function pickout($target, $str){
        $result = mb_stristr($target, $str);
        if($result === false){
            echo "(not found)\n";
        }else{
            echo "{$result}\n";
        }
    }
    pickout("서울시강남구대치동2-3-4", "대치");
    pickout("서울시구로구오류동1-1-1", "구로구");
    pickout("서울시마포구연남동5-5-5", "강남");
?>