<?php
    $page = "PHP7샘플.html";
    $path = rawurlencode($page);
    $url = "http://test.com/{$path}";
    echo $url;
?>