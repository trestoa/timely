<?php
//global include
include('../include.php');
if(!isset($_POST['username']) && !isset($_POST['password'])){
	alert('Invalid login data!');
}
else{
	if(isset($_SESSION['logged_in'])){
		alert('You are already logged in!');
	}
	$query = "SELECT username, ID"
		. " FROM timely_user";
	$check_username = mysql_query($query);
	if(!$check_username){
		die('Database error: ' + mysql_error);
	}
	if(mysql_num_rows($check_username)){
		while($row = mysql_fetch_assoc($check_username)){
			if($_POST['username'] == $row['username']){
				$ID = $row['ID'];
			}
		}
	}
	if($ID){
		$query = "SELECT password FROM timely_user"
			. " WHERE ID = '" . $ID
			. "'";
		$check_password = mysql_query($query);
		if(!$check_password){
			die('Database error: ' + mysql_error()); 
		}
		if(mysql_num_rows($check_password)){
			$row = mysql_fetch_assoc($check_password);
			if($row['password'] != sha1($_POST['password'])){
				alert("You have entered a wrong password!");
			}
		}
		$query = "SELECT id, `default`"
			 . " FROM timely_calender" 
			 . " WHERE owner_id = '" . mysql_real_escape_string($ID) . "'";
		$get_default_calender = mysql_query($query);
		if(!$get_default_calender){
			die('Database error: ' + mysql_error()); 
		}
		echo("hello");
		if(mysql_num_rows($get_default_calender) > 0){
			while($row = mysql_fetch_assoc($get_default_calender)){
				if($row['default'] == 1){
					$default_id = $row['id'];
				}
			}
		}
		if(isset($default_id)){
			$_SESSION['ID'] = $ID;
			$_SESSION['username'] = $_POST['username'];
			$_SESSION['active_calender_id'] = $default_id;
			$_SESSION['logged_in'] = true;
			header('Location: ../index.php');
		}
		else{
			alert("No default calender has been found. Please contact an admin!");
		}
	}
	else{
		alert('This username does not exist!');
	}
	
	
}

?>