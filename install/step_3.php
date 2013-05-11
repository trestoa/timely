<div class="progress">
    <div class="bar" style="width:50%;"></div>
</div><?php
if(isset($_POST['create_tables'])):
	include('../config/mysql_config.php');
	include('../general/mysql_connect.php');
	$queries = file_get_contents('./sql/timely_user.sql') or die('Error while reading file!');
	$queries += file_get_contents('./sql/timely_appointment.sql') or die('Error while reading file!');
	$queries += file_get_contents('./sql/timely_calender.sql') or die('Error while reading file!');
	mysqli_multi_query($sqlConnection, $queries) or die('Database error!');
	header('Location: index.php?step=4');
else:
	$_SESSION['installation_progress'] = '60%';
?>
<h2>Step 3 - Create datatables</h2>
<p>Now we need to create the datatable. timely only these 3 table are needed</p>
<code>
`timely_user`
`timely_calender`
`timely_appointment`
</code>
<p>The script can also generate you the table. Just click on `Generate and Next Step`.</p>
<form action="index.php?step=3" method="post">
	<input type="submit" name="create_tables" value="Generate and Next Step">
</form>
<?php endif; ?>