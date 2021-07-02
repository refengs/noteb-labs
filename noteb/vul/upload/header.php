<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<title>B计划 - 图片上传</title>
<style type="text/css">div{margin:0;padding:0;}body{margin:0;padding:0;text-align:center;background:#333333;font-family:Arial,Helvetica,sans-serif;font-size:13px;color:#666666;}#container{margin:0 auto;padding:0;}h1,h2,h3{margin-top:0;}p{text-align:left;}h1{font-size:2em;}h2{font-size:1.6em;}h3{font-size:1em;}a{color:#333333;}a:hover{text-decoration:none;color:#000000;}#logo{width:750px;height:45px;margin:0 auto;}#logo h1,#logo p{margin:0;color:#FFFFFF;}#logo h1{float:left;padding-top:5px;}#logo p{float:right;padding-top:14px;font-size:1.2em;}#logo a{text-decoration:none;color:#FFFFFF;}#menu{width:778px;height:45px;margin:0 auto;background:#F6F6F6;}#menu ul{margin:0;padding:5px 0 0 14px;list-style:none;}#menu li{display:inline;}#menu a{display:block;float:left;height:29px;padding:11px 30px 0 30px;text-decoration:none;font-weight:bold;color:#333333;}#latest-post{padding:10px;border:1px solid #E7E7E7;}#page{width:778px;margin:0 auto;background:#FFFFFF;text-align:center;}#page-bg{padding:0px;margin:0 auto;text-align:center;}
}
#content {
	margin: 0 auto;
	background: #FFFFFF;
	text-align:center;
	padding: 20px 0 0 20px;
}
input.button {
font-weight: bold;
text-align:center;
color:red;
line-height:25px;
height:25px;
font-size: 12px;
}

#footer {
	width: 750px;
	margin: 0 auto;
	padding: 20px 0;
}

#footer p {
	margin: 0;
	text-align: center;
	font-size: smaller;
	color: #666666;
}
#footer a {
	color: #666666;
}


</style>
<link rel="stylesheet" href="../../../src/css/layui.css">
<link href="../../../src/css/prism.css" rel="stylesheet">
</head>
<body>
<div id="container">
<div id="logo">
	<h1><a href="">B计划 - 图片上传</a></h1>
	<p>
		<button type="button" class="layui-btn layui-btn-radius layui-btn-warm layui-btn-sm" onclick="ok()">一点 tips</button>
		<button type="button" class="layui-btn layui-btn-radius layui-btn-danger layui-btn-sm"><a href=<?php if (isset($_GET['showcode'])) {
		echo '"index.php">隐藏源代码</a></button>';
	}else{
		echo '"?showcode">查看源代码</a></button>';
	} ?><button type="button" class="layui-btn layui-btn-radius layui-btn-normal layui-btn-sm" onclick="clean_upload_file()">清空上传文件</button> </p>
</div>
<div id="menu">
	<ul>
		<li><a href="#upload">上传你的图片</a></li>
	</ul>
</div>
<div id="page">
	<div id="page-bg">
	    	<div id="latest-post">
<a name="upload"></a>
