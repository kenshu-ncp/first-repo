<?php
require_once "views/hello.php";

if (isset($_GET['name']))
    echo 'ようこそ、' . $_GET['name'] . 'さん。';

    //developをいじった坂本だよ