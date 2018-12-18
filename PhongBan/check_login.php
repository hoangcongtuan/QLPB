<?php
	ob_start();
    session_start();
?>
<?php 
	require_once  'DBConnectionUtil.php'; 
	$username =$_POST['username'];
	$password =$_POST['password'];
	$queryLogin = "SELECT * FROM admin WHERE username= '{$username}' && password='{$password}'";
	$resultLogin=$mysqli->query($queryLogin);
	$arLogin =mysqli_fetch_assoc($resultLogin);
	$num_row = mysqli_num_rows($resultLogin);
	if($num_row != 0){
		$_SESSION['userInfo']=$arLogin;
		header('location:xem_phong_ban.php');
	}else {
		echo "loi";
		header('location:login.php');
	}
?>

<?php
	ob_end_flush();
?>