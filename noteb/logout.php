<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>退出登陆</title>
</head>
<body>
	
</body>
 <script></script>
<?php 
session_start();
unset($_SESSION["NotebUser"]);
echo '<script>window.location.href="login.php";</script>';
 ?>
