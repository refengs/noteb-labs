 <?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文件上传</title>
</head>
<body>
<?php 
if (!empty($_FILES)) {
	if (file_exists("./img/" . $_FILES["file"]["name"]))
	{
	    echo "<script>alert('".$_FILES["file"]["name"] . " 文件已经存在。 "."')</script>";
	}
	else
	{
	    // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
	    move_uploaded_file($_FILES["file"]["tmp_name"], "./img/" . $_FILES["file"]["name"]);
	    echo "<script>alert('"."文件存储在: " . "./img/" . $_FILES["file"]["name"]."')</script>";
	}
}
 ?>	
</body>
</html>