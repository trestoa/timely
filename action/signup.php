<?php
//Global include
include('../include.php');
//Check if the user is already logged in
if($_SESSION['logged_in']){
	alert("Your are already logged in!");
}
else{
	if(!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['email'])){
		alert('Invaild login data!');
	}
	else{
		//escape the username und strip-tag them
		$username = mysql_real_escape_string(strip_tags($_POST['username']));
		//Look if the choosen username exists
		$query = "SELECT username"
			. " FROM timely_user";
		$check_username = mysql_query($query);
		if(!$check_username){
			die('Database error: ' . mysql_error());
		}
		if(mysql_num_rows($check_username)){
			while($row = mysql_fetch_assoc($check_username)){
				if($row['username'] == $username){
					alert("The username you choose is already taken!");
				}
			}
		}
		$query = "INSERT INTO timely_user"
			. " (username, email, password)"
			. " VALUES"
			. " ('". $username . "', '" . mysql_real_escape_string(strip_tags($_POST['email'])) . "', '" . sha1($_POST['password']) . "')";
		$create_user = mysql_query($query);
		if(!$create_user){
			die("Database error: " . mysql_error());
		}
		
		//Getting the new users ID
		$query = "SELECT ID"
			. " FROM timely_user"
			. " WHERE username = '" . $username . "'";
		$get_id = mysql_query($query);
		if(!$get_id){
			die("Database error: " . mysql_error());
		}
		if(mysql_num_rows($get_id)){
			$row = mysql_fetch_assoc($get_id);
			$ID = $row['ID'];
		}
		if(isset($ID)){
			//Create the default calender
			$query = "INSERT INTO timely_calender"
				. " (owner_id, `name`, `default`)"
				. " VALUES"
				. " (" . $ID . ", '" . $username . "`s calender" . "', '1')";
			
			$create_default_calender = mysql_query($query);
			if(!$create_default_calender){
				die("Database error: " . mysql_error());
			}
			 
			//Get the new calenders id
			$query = "SELECT id, name"
				. " FROM timely_calender"
				. " WHERE owner_id = " . $ID;
			$get_id = mysql_query($query);
			if(!$get_id){
				die("Database error: " . mysql_error());
			}
			if(mysql_num_rows($get_id)){
				$row = mysql_fetch_assoc($get_id);
				$_SESSION['active_calender_id'] = $row['id'];
			}
			
			//Finally, log the user in and redirect them to index
			$_SESSION['ID'] = $ID;
			$_SESSION['username'] = $username;
			$_SESSION['logged_in'] = true;
			header('Location: ../index.php');
		}
	}
}

?>