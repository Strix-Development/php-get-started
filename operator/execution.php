<?php
    $host = 'www.wuxiancheng.cn';
    echo `ping -n 3 {$host}`;
    echo "<br>";

    require_once __DIR__."/type operator.php";
?>