<?php
    $msg = "안녕하세요. 안녕히계세요.";
    echo mb_strlen($msg), "\n";
    echo mb_substr($msg, 4), "\n";
    echo mb_substr($msg, 4, 9), "\n";
    echo mb_substr($msg, -6);
?>