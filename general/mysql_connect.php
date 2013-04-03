<?php
try{
	mysql_connect(SQL_HOST, SQL_USER, SQL_PASSWORD);
	mysql_select_db(SQL_DB);
}catch(Exception $e){
	die("Can connect to database: " . mysql_error());
}
?>