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
	echo('<div class="calender-content container">');
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
<div class="div-center">
	<h2 id="year"><?php echo $year ?></h2>
</div>
<div class="pagination pagination-centered pagination-small">
	<ul>
    	<li><a href="#" id="prev">&laquo;</a></li>
    	<?php
		$months = array("January","February","March","April","May","June","July","August","September","October","November","December");
		echo '<li>';
		for($i = 0; $i < 12; $i++){
			echo '<li' . ($i == $month+1 ? 'class="active"' : '') . '><a href="#" id="month-pagination" onclick="">' . $months[$i] . '</a></li>';
		}
		?>
        <li><a href="#" id="next">&raquo;</a></li>
    </ul>
</div>

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
		echo('<td class="appointment"><textarea readonly>');
		if(isset($appointments[$day])){
			echo($appointments[$day]);
		}
		echo('</textarea><input type="hidden" class="calender-day" value="' . $day . '"></td>');
	}
	if($day % 7 == 0){
		echo('</tr>');
	}
	$day++;
}
?>
<input type="hidden" id="calender-month" value="<?php echo $month ?>">
<input type="hidden" id="calender-year" value="<?php echo $year ?>">
</table>
</div>