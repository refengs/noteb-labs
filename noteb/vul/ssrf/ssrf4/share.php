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
	if((preg_match('/(192[.]168[.]\d{1,3}[.]\d{1,3})/',$url))||(preg_match('/(10[.]\d{1,3}[.]\d{1,3}[.]\d{1,3})/',$url))||(preg_match('/(172[.]((1[6-9])|(2\d)|(3[01]))[.]\d{1,3}[.]\d{1,3})/',$url))||(preg_match('/127.0.0.1/',$url))){ //匹配一个手机号码
	echo "请不要输入非法地址";
	}else{
	$ch = curl_init();
	// 设置URL和相应的选项
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	// 抓取URL并把它传递给浏览器
	curl_exec($ch);
	// 关闭cURL资源，并且释放系统资源
	curl_close($ch);
	}

}else{
	echo "分享失败";
	echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
}

 ?>	
</body>
</html>