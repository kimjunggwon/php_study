<?php
    function check($target, $str){
        $result = mb_strpos($target, $str);
        if($result === false){
            echo "[{$str}]은(는) [{$target}]에 포함되어 있지 않습니다. \n";
        }else{
            echo "[{$str}]은(는) [{$target}]의 {$result}번째에 문자가 있습니다. \n";
        }
    }
    check("서울시구로구오류동", "구로");
    check("서울시구로구오류동", "강남");
    check("PHP, Swift, C++", "PHP");
    check("PHP, Swift, C++", "Python");
?>