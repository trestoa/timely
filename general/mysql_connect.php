<?php
try{
	mysql_connect('localhost', 'user', 'password') or die('Can not connect to database: ' + mysql_error());
	mysql_select_db('database');
}catch(Exception $e){
	die("Can connect to database: " . mysql_error());
}
?>