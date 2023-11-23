<?php

ini_set('display_errors',1);
error_reporting(E_ALL);
$host = 'localhost';
$user = 'rakesmll_sangram';
$password = 'qwerty123!@#';
@mysql_connect($host,$user,$password) || die('Not possible!'.mysql_error());
(mysql_select_db('rakesmll_iitr'));

?>