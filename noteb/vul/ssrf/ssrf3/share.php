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
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	// 抓取URL并把它传递给浏览器
	$response = curl_exec($ch);
	// 检查文件是否正确取得   
	if (curl_errno($ch)){  
		echo curl_error($ch);/*显示错误信息*/   
		echo "无法取得 URL 数据"; 
		echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";  
		exit;   
	}else{
		echo "分享成功！";  
		echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>"; 
	}
	// 关闭cURL资源，并且释放系统资源
	curl_close($ch);
}else{
	echo "分享失败！";
	echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
}
 ?>	
</body>
</html>