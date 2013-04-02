<?php
function error_alert($message){
	set_template();
	include('../template/header.php');
	include('./template/' . $tmpl_content);
	echo '<div class="alert php-alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>'
		. $message
		. '</div>';
	include('./template/footer.php');
	exit();
}

function set_template(){
	global $title, $tmpl_navbar, $tmpl_content;
	if(!isset($_SESSION['logged_in'])){
		$title = 'Calender';
		$tmpl_navbar = 'default_navbar.php';
		$tmpl_content = 'default_content.php';
	}
	else{
		$title = 'Calender | ' . $_SESSION['username'];
		$tmpl_navbar = 'logged_in_navbar.php';
		$tmpl_content = 'view_calender.php';
	}
}
?>