<?php 
    require_once 'DBConnectionUtil.php'; 
    $idpb = $_GET['idpb'];
    $qr = "DELETE FROM phongban WHERE IDPB = {$idpb}";
    $mysqli->query($qr);
    header("Location: " . $_SERVER["HTTP_REFERER"]);
?>