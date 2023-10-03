<?php
    function team($name, ...$members){
        $list = implode(", ", $members);
        return "{$name} : {$list}";
    }

    $team1 = team("TestTeam1", "test1", "test2", "test3");
    $team2 = team("TestTeam2", "test4", "test5");
    echo $team1 . "<br>" . PHP_EOL;
    echo $team2;
?>