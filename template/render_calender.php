<div class="calender-content container">
<?php
//include_once('../include.php');
//if the user is not logged in return error
if($_SESSION['logged_in'] = false){
	echo('error');
	exit();
}
//get the request information
if(isset($_GET['day']) && isset($_GET['month']) && isset($_GET['year'])){
	
}
//if the script is called from the server, render the default calender
else{
	echo('<script type="text/javascript" src="' . MAIN_URL . '/static/js/view_calender.js"></script>');
	if(isset($_SESSION['last_date'])){
		
	}
	else{
		$date = getdate();
		$month = $date['mon'];
		$year = $date['year'];
		$first_day = date('N', strtotime(1 . $date['month'] . $year));
	}
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
$day=1;
$daysInMonth = cal_days_in_month(CAL_GREGORIAN, $month, $year);
while($day <= ceil($daysInMonth/7)*7){
	if($day % 7 == 1){
		echo('<tr>');
	}
	if($day <= $first_day || $day - $first_day > $daysInMonth){
		echo ('<td class="calender-inactive"></td>');
	}
	else{
		echo('<td class="appointment"><textarea>');
		if(isset($appointments[$day])){
			echo($appointments[$day]);
		}
		echo('</textarea></td>');
	}
	if($day % 7 == 0){
		echo('</tr>');
	}
	$day++;
}
?>

</table>
</div>