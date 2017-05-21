<?php 
	require_once 'db_connect.php';
	error_reporting(E_ALL);
#	$link = mysql_connect('127.0.0.1', 'root', '');
	$link = mysql_connect('mysql.hostinger.jp', 'u797658425_etera', 'rushiruerisu4385');
#	$db_selected = mysql_select_db('honeyworks', $link);
	$db_selected = mysql_select_db('u797658425_uzuru', $link);
	mysql_query("set names utf8",$link); 
 ?>