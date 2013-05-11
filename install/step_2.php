<div class="progress">
    <div class="bar" style="width:25%;"></div>
</div>
<?php
if(isset($_POST['sql-host']) && isset($_POST['sql-database']) && isset($_POST['sql-username']) && isset($_POST['sql-password'])):
	$file_content =
		"<?php
		define('SQL_HOST', '" . $_POST['host'] . "');
		define('SQL_USER', '" . $_POST['username'] . "');
		define('SQL_PASSWORD', '" . $_POST['password'] . "');
		define('SQL_DB', '" . $_POST['database'] . "');
		?>";
	file_put_contents('../config/mysql_config.php', $file_content) or die('Error by writing mysql_config file!!');
	header('Location: index.php?step=3');
else:
	$_SESSION['installation_progress'] = '20%';
?>
<h2>Step 2 - Database Connection</h2>
<p>timely needs a MYSQL database connection. You need to store you connection information in a file. This wizard will create this file for you.</p>
<form class="form-horizontal" action="index.php?step=2" method="post">
	<div class="control-group">
    	<label class="control-label" for="inputHost">Database Host</label>
        <div class="controls">
        	<input type="text" id="inputHost" name="sql-host" value="localhost" required>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="inputDatabase">Database</label>
        <div class="controls">
        	<input type="text" id="inputDatabase" name="sql-database" placeholder="Database" required>
        </div>
    </div>
	<div class="control-group">
    	<label class="control-label" for="inputUser">Username</label>
        <div class="controls">
        	<input type="text" id="inputUser" name="sql-username" placeholder="Username" required>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="inputPassword">Password</label>
        <div class="controls">
        	<input type="text" id="inputPassword" name="sql-password" placeholder="Password">
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Next Step</button>
        </div>
    </div>
</form>
<?php endif; ?>