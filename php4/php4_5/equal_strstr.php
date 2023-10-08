<?php
    function holiday($day){
        if(($day == "토요일") || ($day == "일요일")){
            echo $day, "은 쉽니다.";
        }else{
            echo $day, "은 쉬는 날이 아닙니다.";
        }
    }
    holiday("금요일");
    holiday("토요일");
    holiday("일요일");
?>