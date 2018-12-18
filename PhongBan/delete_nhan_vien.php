<?php 
    require_once 'DBConnectionUtil.php'; 
    $idnv = $_GET['idnv'];
    echo $idnv;
    $qr = "DELETE FROM nhanvien WHERE IDNV = {$idnv}";
    $mysqli->query($qr);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>