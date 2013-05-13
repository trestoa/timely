<?php

/**********************************************************************

timely, a webbased calender
Copyright (C) 2013  Markus Klein <m@mklein.co.at>

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


Made with <3

***********************************************************************/


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
		. ' FROM timely_appointment'
		. ' WHERE calender_id = ' . $_SESSION['active_calender_id'];
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
		$query = "INSERT INTO timely_appointment"
			. " (calender_id, date_day, date_month, date_year, content)"
			. " VALUES"
			. " (" . mysql_real_escape_string(strip_tags($_SESSION['active_calender_id'])) . ", " . mysql_real_escape_string(strip_tags($_GET['day'])) . ", " . mysql_real_escape_string(strip_tags($_GET['month'])) . ", " . mysql_real_escape_string(strip_tags($_GET['year'])) . ", '" . mysql_real_escape_string(strip_tags($_GET['content'])) . "')";
		$insert_date = mysql_query($query);
		if(!$insert_date){
			die("Database error: " . mysql_error());
		}
		else{
			echo('success');
		}
	}
	else{
		$query = "UPDATE timely_appointment"
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