
<?php
	ob_start();
	session_start();
	require_once  'DBConnectionUtil.php'; 

	if(isset($_SESSION['userInfo'])){
		unset($_SESSION['userInfo']);
		header('location: login.php');
		die();
	}
	header('location: phongban.php');

	
	
	ob_end_flush();
?>