<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../../login.php");
}
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<meta name="renderer" content="webkit">
<!--顶部-->
<title>图片下载 B计划平台</title>
<!--通用css-->
<link href="static/css/base.css" rel="stylesheet">
<link href="static/css/iconfont.css" rel="stylesheet">
<link href="static/css/help.css" rel="stylesheet">
<style>
h1{font-size:14px;line-height:30px;}
h2{font-size:18px;line-height:30px;}
.sample-try {
    background: #47de9d;
    border-radius: 4px;
    width: 160px;
    height: 40px;
    display: inline-block;
    margin: 40px auto;
    line-height: 40px;
    margin-left: 0;
    font-size: 16px;
    color: #fff;
    letter-spacing: 1px;
    text-align: center;
}
.downbutton{text-align:center;margin:0 auto;}
</style>

</head>
<body>
<div class="headertop">
<div class="wrapss">

</div>
</div>

<div class="indextoplist">
<div class="wrapss indexbanner">
    <h3>B计划下载神器</h3>
    <p>下载图片竟如此简单</p>

</div>
</div>
<div class="content clear_fix">
<div class="wrap pad15">
  
  
   <!--主内容区--> 
  <div class="star-article clear_fix">
    <!--左侧-->
    <div class="article-l content-l left"  style="width:800px;">
		<div class="downbutton"><a href="./down.php?down=1.jpg" class="sample-try" target="_blank">立即下载</a><!--<a href="/index.php?s=Down&a=begindown&ischromuim=1" class="sample-try" target="_blank">下载chromuim内核浏览器版(49M)</a>--></div>
        <div class="piclist">	
		<p><img src="1.jpg" /></p>
		</div>
		<div class="downbutton"><a href="./down.php?down=1.jpg" class="sample-try" target="_blank">立即下载</a><!--<a href="/index.php?s=Down&a=begindown&ischromuim=1" class="sample-try" target="_blank">下载chromuim内核浏览器版(49M)</a>--></div> 
    </div>
    <!--左推荐-->

</div>

</div>

</div>
<div class="footer">
	<div class="mainbox">
    <p>Copyright ©2020 B计划 C1O2A3 All Rights Reserved</p>
</div>
</div>

</body>
</html>