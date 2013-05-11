<div class="progress">
    <div class="bar" style="width:50%;"></div>
</div><?php
if(isset($_POST['create_tables'])):
	include('../config/mysql_config.php');
	$link = mysqli_connect(SQL_HOST, SQL_USER, SQL_PASSWORD, SQL_DB) or die("Error, can connect to database!");
	$queries = file_get_contents('./sql/timely_user.sql') or die('Error while reading file!');
	$queries += file_get_contents('./sql/timely_appointment.sql') or die('Error while reading file!');
	$queries += file_get_contents('./sql/timely_calender.sql') or die('Error while reading file!');
	mysqli_multi_query($link, $queries) or die('Database error!');
	header('Location: index.php?step=4');
else:
?>
<h2>Step 3 - Create datatables</h2>
<p>Now we need to create the datatable. timely needs only these 3 table are needed</p>
<code>
`timely_user`
`timely_calender`
`timely_appointment`
</code>
<p>The script can also generate you the table. Just click on `Generate and Next Step`.</p>
<form action="index.php?step=3" method="post">
	<input type="submit" name="create_tables">Generate and Next Step</form>
</form>
<?php endif; ?>