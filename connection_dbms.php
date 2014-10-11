<?php

$user = 'root';
$pass = '';
$db = 'retail_store';

$conn = mysql_connect('localhost', $user, $pass); //connect to server
mysql_select_db($db); //connect to db

?>
