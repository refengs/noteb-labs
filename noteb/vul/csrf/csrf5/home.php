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
if (empty($_SESSION["test_username"])) {
    exit();
}
include_once("../../sqli/sql-connect.php");
if (!empty($_POST['Opassword'])) {
    $username =$_SESSION["test_username"] ;
    $Opassword = md5($_POST['Opassword']);
    $sql = "select username,password  from `test_user` where username='$username' and password='$Opassword' limit 0,1";
    $result = mysqli_query($mysqli,$sql);
    $row = mysqli_fetch_array($result);
    if ($row) {
       // 将表中的账号和密码跟所输入的账号和密码进行一个比较
       $db_username = $row['username'];
       $db_userpass = $row['password'];
        if ($db_username == $username &&$db_userpass == $Opassword) {
            #插入修改密码
            if (!empty($_POST['password'])) {
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
            }
        }else{
            echo "<script>alert('少侠，出现未知错误')</script>";
        }
    }else{
        echo "<script>alert('原始密码输入错误')</script>";
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
                <p>原始密码：</p><input type="password" name="Opassword" placeholder="原始密码" id="entry_name" value="">
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