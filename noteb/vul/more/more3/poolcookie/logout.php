<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>退出登陆</title>
</head>
<body>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../../login.php");
}
 ?>
<?php 
setcookie("username", "", time()-3600);
echo '<script type="text/javascript">alert("退出成功");
　　window.location.href="index.php";
　　</script>';

 ?>	
</body>
</html>