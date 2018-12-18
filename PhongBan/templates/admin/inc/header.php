<?php
	ob_start();
	session_start();
	require_once  $_SERVER['DOCUMENT_ROOT']. '/util/DBConnectionUtil.php'; 
	
?>
<?php require_once  $_SERVER['DOCUMENT_ROOT'].'/util/ConstantUtil.php'; ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="/templates/admin/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/templates/admin/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>AdminCP - VinaEnter</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="/templates/admin/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="/templates/admin/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="/templates/admin/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="/templates/admin/assets/css/demo.css" rel="stylesheet" />


    <!--  Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="/templates/admin/assets/css/themify-icons.css" rel="stylesheet">
	<script type="text/javascript" src="/templates/admin/assets/js/ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="/templates/admin/assets/js/ckfinder/ckfinder.js"></script>
	<script type="text/javascript" src="/templates/admin/assets/js/jquery-2.1.1.min.js"></script>
	 <script type="text/javascript" src="/templates/admin/assets/js/jquery-3.3.1.min.js"></script> 
	<script type="text/javascript" src="/templates/admin/assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript" src="/templates/admin/assets/js/jquery.validate.min.js"></script>

</head>
<body>

<div class="wrapper">

	<!-- leftbar -->

    