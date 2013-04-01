<?php
//global include
include('../include.php');
if(!isset($_POST['username']) && !isset($_POST['password'])){
	alert_error('Invalid login data!');
}
else{
	if($_SESSION['logged_in']){
		
	}
}

?>