<!DOCTYPE html>
<html lang="en">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>密码修改-B计划</title>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 
if (empty($_SESSION["test_username"])) {
    exit();
}

if (!empty($_POST['password'])) {
    // echo $_SERVER['HTTP_REFERER'];
    // echo $_SERVER['SERVER_NAME'];
    // echo $_SERVER['HTTP_HOST'];
    // echo $_SERVER['PHP_SELF'];
    if (stripos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST']) !==false) {
        //包含连接数据库文件
        include_once("../../sqli/sql-connect.php");
        $sql = "update `test_user` set password=? where username=?";
        $mysqli_stmt = $mysqli->prepare($sql);
        //3、绑定参数(给?传值,必须传变量)
        $password=md5($_POST['password']);
        $username=$_SESSION["test_username"];
        $mysqli_stmt->bind_param("ss",$password,$username);
        //4、执行
        $b = $mysqli_stmt->execute();
        if($b){
            unset($_SESSION["test_username"]);
            echo '<script type="text/javascript">
        　　window.location.href="index.php";alert("修改成功！请重新登陆");
        　　</script>';
        }else{
        echo $mysqli_stmt->error."<script>alert('修改失败！！！');";
        }
        $mysqli_stmt->close();
        $mysqli->close();
    }else{
        echo "<script>alert('少侠正经点！修改失败！！！');</script>";
    }
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
			<h1>密码修改 </h1><br>
            <h2>欢迎登陆： <?php if (!empty($_SESSION["test_username"])) {
                echo $_SESSION["test_username"];
            } ?></h2>
            <br>
                <a href="logout.php">退出登陆</a>
			<form class="form" id="entry_form" method="post" action="">
				<p>新密码：</p><input type="password" name="password" placeholder="新密码" id="entry_name" value="">
				<p>确认密码：</p><input type="password" name="password2" placeholder="确认密码" id="entry_password">
				<button type="submit" id="entry_btn">修改密码</button>
				<div id="prompt" class="prompt"></div>
			</form>
		</div>
	</div>
</div>


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