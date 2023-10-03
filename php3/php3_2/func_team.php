<?php
    function team($name, ...$members){
        print_r($name . PHP_EOL);
        print_r($members);
    }

    team("testTeam", "test1", "test2", "test3");
?>