<?php
    $msg = " 서울시구로구오류동 \n\n";
    $result = trim($msg, "\x20\t\n\r\0\v");
    echo "처리 전: \n";
    echo "[", $msg, "]\n";
    echo "처리 후: \n";
    echo "[", $result, "]\n";
?>