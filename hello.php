<?php
require_once "views/hello.php";

if (isset($_GET['name']))
    echo 'ようこそ、' . $_GET['name'] . 'さん。';

    //坂本の変更
    echo "本日はどうされましたか？";
