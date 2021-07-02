<!doctype html>
<html lang="zh">
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>登录</title>
<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<div class="htmleaf-container">
	<div class="wrapper">
		<div class="container">
			<h1>欢迎登陆</h1>
			
			<form class="form" method="POST" action="">
				<input type="text" placeholder="请输入用户名" name="username">
				<input type="password" placeholder="请输入密码" name="password">
				<button type="submit" id="login-button">登陆</button>
			</form>
		</div>
		
		<ul class="bg-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
</div>
<?php 
if (!empty($_POST['username'])&&!empty($_POST['password'])) {
	if (($_POST['username'] == 'test' && ($_POST['password'] == 'test'))) {
		header("Location:home.php?id=2");
	}elseif (($_POST['username'] == 'admin' && ($_POST['password'] == 'admin@5320'))) {
		header("Location:home.php?id=1");
	}
}
 ?>
<script src="js/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$('#login-button').click(function (event) {
	// event.preventDefault();
	$('form').fadeOut(500);
	$('.wrapper').addClass('form-success');
});
</script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';color:#000000">
<h1>B计划</h1>
</div>
</body>
</html>