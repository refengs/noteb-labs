<!DOCTYPE html>
<html>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../../login.php");
}
 ?>
<head>
	<meta name="apple-itunes-app" content="app-id=591578609" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
	<title>忘记密码</title>
	
	<link type="text/css" rel="stylesheet" href="static/css/base.css" />
	<link rel="stylesheet" href="static/css/header.css" />
	<!-- <link type="text/css" rel="stylesheet" href="https://t-s.gaodun.com/web/static-share/inc/base.css?v=css_1586955856" /> -->
	<link type="text/css" rel="stylesheet" href="static/css/chat_c.css" />
	<link type="text/css" rel="stylesheet" href="static/css/validator.css" />
	<link type="text/css" rel="stylesheet" href="static/css/mathquill.css" />
	<!--新增login.css-->
	<link type="text/css" rel="stylesheet"
		href="static/css/loginv2.css" />



	<style type="text/css">
		@media screen and (max-width:767px) {

			/*2019/3/12修改nav头部*/
			#findCont {
				display: none !important;
			}

			#prosub {
				display: none !important;
			}

			#topNav .hidden_btn:hover a.mk {
				background: none !important;
			}
		}

		@media screen and (max-width:1000px) {
			.packetsTop {
				display: none;
			}
		}

		#topNav .topCont #findCont {
			left: -180px !important;
		}

		#topNav .hidden_btn:hover a.mk {
			background: #FFFFFF;
		}

		#prosub {
			width: 1113px;
			background-color: #fff;
			border-radius: 4px;
			display: flex;
			flex-direction: row;
			height: auto;
			font-family: "microsoft yahei";
			box-sizing: border-box;
			padding: 0px 40px;
			margin: 8px 8px 3px !important;
		}

		#prosub a {
			display: block;
		}

		#prosub>.fl1 {
			display: block;
			width: 250px;
			height: 480px;
			box-sizing: border-box;
			padding: 40px 0 0 0;
		}

		#prosub>.fl1:hover {
			background-color: #f7f7f7;
		}

		#prosub>.fl1>.nav_title {
			width: 130px;
			text-align: center;
			background-color: #e8e8e8;
			height: 34px;
			font-size: 16px;
			color: #161616;
			font-weight: bolder;
			line-height: 34px;
			border-radius: 100px;
			font-family: "microsoft yahei";
			margin-left: 50px !important;

		}

		#prosub>.fl1>.navbody1 {
			min-height: 180px;
			min-width: 155px;
		}

		#prosub>.fl1>div {
			margin-left: 65px;
		}

		#prosub .a1 {
			height: 20px;
			font-size: 14px;
			color: #2b2b2b;
			line-height: 20px;
			border-left: 3px solid #34AF57;
			box-sizing: border-box;
			padding-left: 5px;
			margin: 25px 0px 11px 0;
			font-family: "microsoft yahei";
			font-weight: bold;
		}

		#prosub .a2 {
			font-size: 14px;
			color: #5f5f5f;
			height: 20px;
			line-height: 20px;
			text-align: left;
			margin-bottom: 13px;
			margin-left: 10px;
			max-width: 160px;
			font-family: "microsoft yahei";
		}

		#prosub .a2:hover {
			text-decoration: underline;
		}

		#topNav .topCont #findCont {
			left: -130px;
			height: 0px;
			margin: 0;
			padding: 0;
			width: 1113px;
		}
	</style>
	<!--end 红包-->


</head>

<body>

<!--end 弹出登录框-->
<link href="static/css/reg.css" rel="stylesheet" type="text/css"/>
<!-- px转化为rem，移动端自适应 -->

<!--end px转化为rem，移动端自适应 -->
<!--面包屑导航-->
<div class="bdNavbg">
	<div id="breadNav">
		<a href="/">B计划</a> &gt; 找回密码
	</div>
</div>
<!--end 面包屑导航-->
<!--wrapper-->
<div id="wrapper">
	<div class="forgetStep clearfix">
    	<div>
        	<h4>01</h4>
            <p>输入账户名</p>
        </div>
        <em></em>
        <div class="current">
        	<h4>02</h4>
            <p>验证身份</p>
        </div>
        <em></em>
        <div>
        	<h4>03</h4>
            <p>重置密码</p>
        </div>
        <em></em>
        <div>
        	<h4>04</h4>
            <p>完成</p>
        </div>
    </div>
    <div class="forgetCont forgerCt1">
    	<h3 class="titTop"></h3>
        <div class="forgetFom">
        	<form action="FindPwd3.php" method="GET" id="fgform">
       			<div class="fomItem">
            		<p><em>账户名：</em><input name="username" type="text" id="fuser_account" size="40" placeholder="请输入用户名" value="<?php
if (!empty($_GET['username'])) {
 	$user = $_GET['username'];
 	echo $user;
 }
            		 ?>" /></p>
				</div>
				<div>
				<div class="fomItem">
				<p><em>验证码：</em><input name="yzm" type="text" id="fuser_account" size="40" placeholder="已发送 请查看短信" value="<?php 
if (!empty($user)) {
 	$yzm = rand(0000,9999);
 	if(!empty($_SESSION["findpwdyzm"])){
 		unset($_SESSION["findpwdyzm"]);
 	}
 	$_SESSION["findpwdyzm"] = $yzm;

 }
				 ?>" /><?php echo "<!--已注释//验证码是：".$yzm."-->"; ?></p>
				</div>
				</div>
				</div>
				<div class="subCont">
            		<p><input class="btn btn-success btn-large" type="submit" name="button" id="fbutton" value="下一步"></p>
				</div>
			</form>
		</div>
	</div>
</div>
<!--end wrapper-->

<script src="static/js/jquery-1.7.1.min.js" type="text/javascript"></script>

