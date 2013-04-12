<?php
//global include
include('../include.php');
//if the user is not logged in, return error
if(!isset($_SESSION['logged_in'])){
	echo('not_logged_in'),
	exit();
}
if(isset($_GET['year']) && isset($_GET['month']) && isset($_GET['day']) && isset($_GET['content'])){
	//proof if the appointment exists
	$query = 'SELECT date_day, date_month, date_year, id'
		. ' FROM calender_appointment'
		. ' WHERE user_id = ' . $_SESSION['ID'];
	$check_appointment = mysql_query($query);
	if(!$check_appointment){
		die('Database error: ' + mysql_error);
	}
	if(mysql_num_rows($check_appointment)){
		while($row = mysql_fetch_assoc($check_appointment)){
			if($_GET['year'] == $row['date_year'] && $_GET['month'] == $row['date_month'] && $_GET['day'] == $row['date_day']){
				$appointment_exists = true;
				$id = $row['id'];
			}
		}
		if(!isset($appointment_exists)){
			$appointment_exists = false;
		}
	}
	else{
		$appointment_exists = false;
	}
	//if the appointment not exists, insert a new
	if(!$appointment_exists){
		$query = "INSERT INTO calender_appointment"
			. " (user_id, date_day, date_month, date_year, content)"
			. " VALUES"
			. " (" . mysql_real_escape_string(strip_tags($_SESSION['ID'])) . ", " . mysql_real_escape_string(strip_tags($_GET['day'])) . ", " . mysql_real_escape_string(strip_tags($_GET['month'])) . ", " . mysql_real_escape_string(strip_tags($_GET['year'])) . ", '" . mysql_real_escape_string(strip_tags($_GET['content'])) . "')";
		$insert_date = mysql_query($query);
		if(!$insert_date){
			die("Database error: " . mysql_error());
		}
		else{
			echo('success');
		}
	}
	else{
		$query = "UPDATE calender_appointment"
			. " SET content = '" . mysql_real_escape_string(strip_tags($_GET['content'])) . "'"
			. " WHERE id=" . $id;
		$update_date = mysql_query($query);
		if(!$update_date){
			die("Database error: " . mysql_error());
		}
		else{
			echo('success');
		}
	}
}
else{
	echo('invalid_arguments');
	exit();
}
?>