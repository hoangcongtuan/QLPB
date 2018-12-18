<?php
	ob_start();
	session_start();
	require_once   'DBConnectionUtil.php'; 
	// require_once  'Check_Login.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="templates/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="templates/admin/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Trang Quản Lý</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <!-- Bootstrap core CSS     -->
    <link href="templates/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Animation library for notifications   -->
    <link href="templates/admin/assets/css/animate.min.css" rel="stylesheet"/>
    <!--  Paper Dashboard core CSS    -->
    <link href="templates/admin/assets/css/paper-dashboard.css" rel="stylesheet"/>
    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="templates/admin/assets/css/demo.css" rel="stylesheet" />
    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="templates/admin/assets/css/themify-icons.css" rel="stylesheet">
	<script type="text/javascript" src="templates/admin/assets/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/ckfinder/ckfinder.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/jquery-2.1.1.min.js"></script>
	 <script type="text/javascript" src="templates/admin/assets/js/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="templates/admin/assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="templates/admin/assets/js/jquery.validate.min.js"></script>

</head>
<body>

<div class="wrapper">
	<!-- leftbar -->
<div class="sidebar" data-background-color="black" data-active-color="danger">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="phongban.php" class="simple-text"><?php echo $_SESSION['userInfo']['username']?></a>
            </div>
            <ul class="nav">
				<?php
					$url2=$_SERVER['REQUEST_URI'];
				?>
            	<li >
                    <a href="xem_nhan_vien.php">
                        Xem nhân viên
                    </a>
                </li>
            	 <li>
                    <a href="xem_phong_ban.php">
                        Xem phòng ban
                    </a>
                </li>

                 <li>
                    <a href="tim_kiem_nhan_vien.php">
                        Tìm kiếm nhân viên
                    </a>
                </li>

                 <li>
                    <a href="tim_kiem_phong_ban.php">
                        Tìm kiếm phòng ban
                    </a>
                </li>

                 <li>
                    <a href="cap_nhat_phong_ban.php">
                        Cập nhật phòng ban
                    </a>
                </li>

                <li>
                    <a href="cap_nhat_nhan_vien.php">
                        Cập nhật nhân viên
                    </a>
                </li>
            </ul>
    	</div>
    </div>
<div class="main-panel">
		<nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="xem_nhan_vien.php">Xem nhân viên</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
						<li>
                            <a href="logout.php">
								<input type="submit" value="Logout" name="logout" />
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
        <table class="table table-striped">
                                    <thead>
                                        <th>IDNV</th>
                                    	<th>Tên nhân viên</th>
                                    	<th>Phòng ban</th>
                                    	<th>Địa chỉ</th>
                                    </thead>
                                    <tbody class="danhsach">
                                        <?php
                                            if (isset($_GET['id'])) {
                                                $id = $_GET['id'];
                                                $queryNV="SELECT IDNV, Hoten, phongban.TenPB, Diachi 
                                                FROM phongban INNER JOIN nhanvien
                                                ON phongban.IDPB = nhanvien.IDPB where nhanvien.IDPB = $id
                                                ORDER BY IDNV ";
                                            }
                                            else 
                                                $queryNV="SELECT IDNV, Hoten, phongban.TenPB, Diachi 
                                                FROM phongban INNER JOIN nhanvien
                                                ON phongban.IDPB = nhanvien.IDPB 
                                                ORDER BY IDNV ";
										
										$resultNV= $mysqli->query($queryNV);
										while ($arNV=mysqli_fetch_assoc($resultNV)){
											$Id_NV=$arNV['IDNV'];
											$Hoten=$arNV['Hoten'];
											$Tenpb=$arNV['TenPB'];
											$Diachi=$arNV['Diachi'];
		
								?>
                                        <tr>
                                        	<td><?php echo $Id_NV?></td>
                                        	<td><?php echo $Hoten?></td>
                                            <td><?php echo $Tenpb?></td>
                                            <td><?php echo $Diachi?></td>
                                        </tr>
                                        <?php }?>
                                    </tbody>
 
                                </table>
                          
        </div>
	</body>
</html>