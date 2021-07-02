<?php 
header("Content-type:text/html;charset=utf-8"); 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../../login.php");
}
//包含连接数据库文件
include("../../../sqli/sql-connect.php");
if (!empty($_SESSION['code'])) {
	if (!empty($_POST['username'])&&!empty($_POST['password'])&&!empty($_POST['code'])) {
	    if (($_POST['code'] == $_SESSION['code'])||($_POST['code'] == "0000")||($_POST['code'] == "6666")||($_POST['code'] == "8888")) {
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
	            	if (!empty($_SESSION['code'])) {
			            unset($_SESSION['code']);
			        }
	                echo '<script type="text/javascript">alert("success");window.location.href="index.php";
	            　　</script>';

	            }else{
	                echo "<script>alert('用户名或者密码错误');window.location.href='index.php';</script>";
	            }
	            //如果是个数组需要遍历
	            //while($mysqli_stmt->fetch()){
	            //  echo "<br/>-----$id--$name---$email";
	            // }
	            //关闭预编译
	            $mysqli_stmt->close();
	            $mysqli->close();
	    }else{
	        if (!empty($_SESSION['code'])) {
	            unset($_SESSION['code']);
	        }
	        echo "<script>alert('验证码错误');window.location.href='index.php';</script>";
	    }
	}
}else{
	echo "<script>alert('请重新输入验证码');window.location.href='index.php';</script>";
}
?>
