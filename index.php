<?php
include("include.php");

if(!isset($_SESSION['logged_in']))
{
	$title = 'Calender';
	$tmpl_navbar = 'default_navbar.php';
	$tmpl_content = 'default_content.php';
}

include('./template/header.php');
include('./template/' . $tmpl_content);
include('./template/footer.php')

?>