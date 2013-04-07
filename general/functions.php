<?php
function alert($message){
	set_template();
	include('../template/header.php');
	echo '<div class="alert php-alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>'
		. $message
		. '</div>';
	include('../template/' . $GLOBALS['tmpl_content']);
	include('../template/footer.php');
	exit();
}

function set_template(){
	if(!isset($_SESSION['logged_in'])){
		$GLOBALS['title'] = 'Calender';
		$GLOBALS['tmpl_navbar'] = 'default_navbar.php';
		$GLOBALS['tmpl_content'] = 'default_content.php';
	}
	else{
		$GLOBALS['title'] = 'Calender | ' . $_SESSION['username'];
		$GLOBALS['tmpl_navbar'] = 'logged_in_navbar.php';
		$GLOBALS['tmpl_content'] = 'view_calender.php';
	}
}
?>