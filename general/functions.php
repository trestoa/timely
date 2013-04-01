<?php
function print_error($message){
	$title = 'Calender';
	$tmpl_navbar = 'default_navbar.php';
	$tmpl_content = 'default_content.php';
	include('../template/header.php');
	include('./template/' . $tmpl_content);
	echo '<div class="alert php-alert">
		<button type="button" class="close" data-dismiss="alert">&times;</button>'
		. $message
		. '</div>';
	include('./template/footer.php');
}
?>