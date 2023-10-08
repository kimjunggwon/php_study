<?php
    function check($str2){
        $str1 = "ABC";
        //$str2가 $str1로 시작되는 비교
        $result = strncasecmp($str1, $str2, strlen($str1));
        echo "{$str2}는 ";
        if($result == 0){
            echo "{$str1}로 시작한다.\n";
        }else{
            echo "그 외. \n";
        }
    }

    $id1 = "ABCR70";
    $id2 = "xbcM65";
    $id3 = "AbcW71";
    $id4 = "xABC68";
    check($id1);
    check($id2);
    check($id3);
    check($id4);
?>