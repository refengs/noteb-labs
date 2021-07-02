<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>用户登录-B计划</title>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<link rel="stylesheet" type="text/css" href="../css/style.css">

<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/vector.js"></script>

</head>
<body>

<div id="container">
	<div id="output">
		<div class="containerT">
			<h1>B计划-登陆</h1>
			<form class="form" id="entry_form" method="post" action="">
				<input type="text" name="username" placeholder="用户名" id="entry_name" value="">
				<input type="password" name="password" placeholder="密码" id="entry_password">
				<button type="submit" id="entry_btn">登录</button>
				<div id="prompt" class="prompt"></div>
			</form>
		</div>
	</div>
</div>
<?php 
//包含连接数据库文件
include("../../sqli/sql-connect.php");
if (!empty($_POST['username'])&&!empty($_POST['password'])) {
	//使用预编译，防止注入
    $sql = "select username,password  from `test_user` where username=(?) and password=(?) limit 0,1";
    $mysqli_stmt = $mysqli->prepare($sql);
    //3、绑定参数(给?传值,必须传变量)
	$pass = md5($_POST['password']);
	$user = $_POST['username'];
    $mysqli_stmt->bind_param("ss",$user,$pass);
    //绑定结果集
    $mysqli_stmt->bind_result($name,$pwd);
    //4、执行
    $b = $mysqli_stmt->execute();
    //获取结果
    $mysqli_stmt->fetch();
    if (!empty($name)&&!empty($pwd)) {
    	if (!empty($_SESSION["test_username"])) {
    		unset($_SESSION["test_username"]);
            unset($_SESSION["token"]);
            setcookie("token","",time()-3600);

    	}
    	$_SESSION["test_username"]=$name;
        $ran = rand(000001,999999);
        $token_md5 = md5($name.$ran);
        $_SESSION["token"]=$token_md5;
        $token = $token_md5;
        setcookie("token",$token,time()+3600);
    	echo '<script type="text/javascript">
	　　window.location.href="home.php";
	　　</script>';

    }else{
    	echo "<script>alert('登陆错误，请重试')</script>";
    }
 	//如果是个数组需要遍历
 	//while($mysqli_stmt->fetch()){
	//	echo "<br/>-----$id--$name---$email";
	// }
    //关闭预编译
    $mysqli_stmt->close();
    $mysqli->close();
}
 ?>

<script type="text/javascript">
    $(function(){
        Victor("container", "output");   //登录背景函数
        $("#entry_name").focus();
        $(document).keydown(function(event){
            if(event.keyCode==13){
                $("#entry_btn").click();
            }
        });
    });
</script>
</body>
</html>