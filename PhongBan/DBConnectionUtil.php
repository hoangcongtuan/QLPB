<?php
//khởi tạo đối tượng mysqli
$mysqli = new mysqli("localhost", "root", "", "dulieu");
//thiết lập font chữ utf8
$mysqli->set_charset("utf8");
//thông báo lỗi nếu kết nối sai
if (mysqli_connect_errno()){
	echo "Lỗi kết nối database: " . mysqli_connect_error();
	exit();
}
?>
