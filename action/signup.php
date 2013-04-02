<?php
//Global include
include('../include.php');
//Check if the user is already logged in
if($_SESSION['logged_in']){
	error_alert("Your are already logged in! Is not one account enough for you?");
}
else{
	if(!isset($_POST['username']) && !isset($_POST['password']) && !isset($_POST['repassword']) && !isset($_POST['email'])){
		error_alert('Invaild login data!');
	}
	else{
		//Look if the choosen username exists
		$query = "SELECT username"
			. " FROM user";
		$check_username = mysql_query($query);
		if(!$check_username){
			die('Database error: ' . mysql_error());
		}
		if(mysql_num_rows($check_username)){
			while($row = mysql_fetch_assoc($check_username)){
				if($row['username'] == $_POST['username']){
					error_alert("The username you choose is already taken!");
				}
			}
		}
		$query = "INSERT INTO user"
			. " (username, email, password)"
			. " VALUES"
			. " ('". $_POST['username'] . "', '" . $_POST['email'] . "', '" . sha1($_POST['password']) . "')";
		$create_user = mysql_query($query);
		if(!$create_user){
			die("Database error: " . mysql_error());
		}
		//Getting the new users ID
		$query = "SELECT ID"
			. " FROM user"
			. " WHERE username = '" . $_POST['username'] . "'";
		$get_id = mysql_query($query);
		if(!$get_id){
			die("Database error: " . mysql_error());
		}
		if(mysql_num_rows($get_id)){
			$row = mysql_fetch_assoc($get_id);
			$ID = $row['ID'];
		}
		//Log the user in
		$_SESSION['ID'] = $ID;
		$_SESSION['username'] = $_POST['username'];
		$_SESSION['logged_in'] = true;
		header('Location: ../index.php');
	}
}

?>