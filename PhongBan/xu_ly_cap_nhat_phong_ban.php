<?php
    require_once 'DBConnectionUtil.php'; 
    $idpb = $_GET['id'];
    $queryPhongBan="SELECT * FROM phongban WHERE IDPB = $idpb";
    $rs= $mysqli->query($queryPhongBan);
    $result = mysqli_fetch_assoc($rs);
?>
<!doctype html>
<html lang="en">
<head>
<title>Cập nhật phòng ban</title>
<link rel="stylesheet" href="./css/login.css">
</head>
<body>
<form action="cap_nhat_phong_ban.php" method="post">
    <div class="container">
    
        <label><b>Mã phòng ban</b></label>
        <input type="text" name="IDPB" value = "<?php echo $idpb?>" placeholder="IDPB" required autocomplete="off" readonly = "readonly">
        <label><b>Tên phòng ban</b></label>
        <input type="text" name="TenPB" value = "<?php echo $result['TenPB'] ?>" placeholder="TenPB" required autocomplete="off" autofocus>

        <label><b>Mô tả</b></label>
        <input type="text" name="MoTa" value = "<?php echo $result['MoTa'] ?>" placeholder="MoTa" required autocomplete="off" autofocus>
        <input type="submit" value="Cập nhật"/>
    </div>
</form>
</body>
</html>