<?php
//global include
include('../include.php');
if(!isset($_POST['username']) && !isset($_POST['password'])){
	alert_error('Invalid login data!');
}
else{
	if($_SESSION['logged_in']){
		alert_error('You are already logged in!');
	}
	$query = "SELECT username, ID"
		. " FROM user";
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
	if($ID) {
		$query = "SELECT password FROM user"
			. " WHERE ID = '" . $ID
			. "'";
		$check_password = mysql_query($query);
		if(!$check_password){
			die('Database error: ' + mysql_error); 
		}
		if(mysql_num_rows($check_password)){
			while($row = mysql_fetch_assoc($check_password)){
				if($row['password'] == sha1($_POST['password'])){
					$_SESSION['ID'] = $data['ID'];
					$_SESSION['username'] = $data['username'];
					$_SESSION['logged_in'] = true;
					header('Location: ../index.php');
				}
				else{
					error_alert("You have entered a wrong password!");
				}
			}
		}	
	}
	else{
		error_alert('This username does not exist!');
	}
	
	
}

?>