<?php
    require_once 'DBConnectionUtil.php'; 
    $idnv = $_GET['id'];
    $qr_nhanvien="SELECT * FROM nhanvien WHERE IDNV = $idnv";
    $rs= $mysqli->query($qr_nhanvien);
    $result = mysqli_fetch_assoc($rs);
?>
<!doctype html>
<html lang="en">
<head>
<title>Cập nhật Nhân viên</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="cap_nhat_nhan_vien.php" method="post">
    <div class="container">
    
        <label><b>Mã Nhân viên</b></label>
        <input type="text" name="IDNV" value = "<?php echo $idnv?>" placeholder="IDNV" required autocomplete="off" readonly = "readonly">
        <label><b>Tên Nhân viên</b></label>
        <input type="text" name="Hoten" value = "<?php echo $result['Hoten'] ?>" placeholder="HoTen" required autocomplete="off" autofocus>

        <label><b>ID Phòng ban</b></label>
        <input type="text" name="IDPB" value = "<?php echo $result['IDPB'] ?>" placeholder="IDPB" required autocomplete="off" autofocus>

        <label><b>Địa chỉ</b></label>
        <input type="text" name="Diachi" value = "<?php echo $result['Diachi'] ?>" placeholder="Diachi" required autocomplete="off" autofocus>
        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>