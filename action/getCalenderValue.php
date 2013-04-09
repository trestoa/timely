<?php
include('../include.php');
//if the user is not logged in return error
if($_SESSION['logged_in'] = false){
	echo('error');
	exit();
}
?>

<table class="table table-bordered">
<tr>
  <th>Sunday</th>
  <th>Monday</th>
  <th>Tuesday</th>
  <th>Wednesday</th>
  <th>Thursday</th>
  <th>Friday</th>
  <th>Saturday</th>
</tr>

<?php	
//get the request information
if(isset($_GET['default'])){
	if(isset($_SESSION['last_date'])){
		
	}
	else{
		$date = getdate();
		$month = $date['mon'];
		$year = $date['year'];
		$first_day = date('l', strtotime($year . $month . 1));
	}
}
elseif(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
	
}
else{
	
}
//get the appointments for database
$query = "SELECT content, user_id, date_day"
	. " FROM calender_appointment"
	. " WHERE date_year = '" . $year . "' and date_month = '" . $month . "'";

$appointments_query = mysql_query($query);	
if(!$appointments_query){
	die("Database error: " . mysql_error());
}

if(mysql_num_rows($appointments_query)){
	while($row = mysql_fetch_assoc($appointments_query)){
		if($row['user_ID'] == $_SESSION['ID']){
			$appointments[$row['date_day']] = $row['content'];
		}
	}
}

//render the calender
for($day = 1; $day <= cal_days_in_month(CAL_GREGORIAN, $month, $year); $day++){
	echo('<tr>');
	for($i = 0; $i < 7; $i++){
		if($day < $first_day){
			echo('<td class="calender-inactive"></td>');
		}
		else{
			echo('<td><textarea>');
			if(isset($appointments[$day])){
				echo($appointments[$day]);
			}
			echo('</textarea></td>');
		}
		$day++;
	}
	echo('</tr>');
}

?>

</table>