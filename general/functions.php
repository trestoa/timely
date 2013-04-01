<?php
function alert_error($message){
	setTamplate();
	include('../template/header.php');
	include('./template/' . $tmpl_content);
	echo '<div class="alert php-alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>'
		. $message
		. '</div>';
	include('./template/footer.php');
	exit();
}

function setTemplate(){
	if(!isset($_SESSION['logged_in'])){
		$title = 'Calender';
		$tmpl_navbar = 'default_navbar.php';
		$tmpl_content = 'default_content.php';
	}
}
?>