<?php
    $id1 = "AB12R";
    $id2 = "ab12r";
    //대문자와 소문자를 구별하지 않고 비교
    $result = strcasecmp($id1, $id2);
    echo "{$id1}과 {$id2}을 비교한 결과.";
    if($result == 0){
        echo "일치합니다. ";
    }else{
        echo "일치하지 않습니다. ";
    }
?>