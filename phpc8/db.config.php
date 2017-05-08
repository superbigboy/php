<?php
include 'common.inc.php';
$dsn = 'mysql:host=localhost;dbname = users';
$dsc = new PDO($dsn,'201503wangzhongy','mysql2015') or die('连接失败');
$dsc->exec('set names utf8');
