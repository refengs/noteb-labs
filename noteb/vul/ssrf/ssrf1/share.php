 <?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分享中……</title>
</head>
<body>
<?php 
if (!empty($_GET['url'])) {
	$url = $_GET['url'];
	$ch = curl_init();
	// 设置URL和相应的选项
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	// 抓取URL并把它传递给浏览器
	curl_exec($ch);
	// 关闭cURL资源，并且释放系统资源
	curl_close($ch);
}else{
	echo "分享失败";
	echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
}

 ?>	
</body>
</html>