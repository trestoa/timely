<div class="progress">
    <div class="bar" style="width:75%;"></div>
</div>
<?php
if(isset($_POST['config-service-name']) && isset($_POST['config-hoster-url']) && isset($_POST['config-hoster-name']) && isset($_POST['config-contact-email']) && isset($_POST['config-main-url'])):
	$file_content =
		"<?php
		//Name of the Service; default: timely :-)
		define('SERVICE_NAME', '" . $_POST['config-service-name'] . "');
		//Webpage of the hoster
		define('HOSTER_URL', '" . $_POST['config-hoster-url'] . "');
		//Name of the hoster
		define('HOSTER_NAME', '" . $_POST['config-hoster-name'] . "');
		//Contact EMail for support
		define('CONTACT_NAME', '" .$_POST['config-contact-email']  . "');
		//Main (root) URL of the service; Without the `/` at the end and with the protocol!! E.g. http://example.com
		define('MAIN_URL', '" . $_POST['config-main-url'] . "');
		?>";
	file_put_contents('../config/config.php', $file_content) or die('Error by writing config file!!');
	header('Location: index.php?step=5');
else:
	$_SESSION['installation_progress'] = '100%';
?>
<h2>Step 4 - Configuration</h2>
<p>After the database initialization we can step forward to the general config. Therefore we will also create a config file.</p>
<form class="form-horizontal" action="index.php?step=4" method="post">
	<div class="control-group">
    	<label class="control-label" for="inputServiceName">Service Name</label>
        <div class="controls">
        	<input type="text" id="inputServiceName" name="config-service-name" value="timely" required="required">
            <p>Name of your webservice.</p>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="inputHosterUrl">Hoster URL</label>
        <p>Your / your webmasters Webpage.</p>
        <div class="controls">
        	<input type="text" id="inputHosterUrl" name="config-hoster-url" placeholder="Hoster URL" required="required">
        </div>
    </div>
	<div class="control-group">
    	<label class="control-label" for="inputHosterName">Hoster Name</label>
        <div class="controls">
        	<input type="text" id="inputHosterName" name="config-hoster-name" placeholder="Hoster Name" required="required">
            <p>Your / your webmasters name.</p>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="inputContactEmail">Contact Email</label>
        <div class="controls">
        	<input type="email" id="inputContactEmail" name="config-contact-email" placeholder="Email" required="required">
            <p>An email-address appearing in the footer of every page. E.g. for support.</p>
        </div>
    </div>
    <div class="control-group">
    	<label class="control-label" for="inputMainUrl">Main Url</label>
        <div class="controls">
        	<input type="text" id="inputMainUrl" name="config-hoster-name" placeholder="http://example.tld" required="required">
            <p>The main URL if your service. <strong>Without the `/` at the end and with the protocol!!</strong></p>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <button type="submit" class="btn">Next Step</button>
        </div>
    </div>
</form>
<?php endif; ?>