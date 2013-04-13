<?php
//Global include
include('../include.php');
if($_SESSION['logged_in'] == true){
	//kill sessionm data
	$_SESSION = array();
	
	//kill session
	if (ini_get("session.use_cookies")) {
		$params = session_get_cookie_params();
		setcookie(session_name(), '', time() - 42000,
			$params["path"], $params["domain"],
			$params["secure"], $params["httponly"]
		);
	}
	
	//destroy the session
	session_destroy();
	
	//redirect user to index
	header('Location: ' . MAIN_URL . '/');
}
else{
	alert('You are not logged in, so you can not log out!');
}
?>