<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>正在注册</title>
</head>
<body>
    

<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 
if (!empty($_POST['username'])&&!empty($_POST['password'])) {
	//包含连接数据库文件
    include("../../sqli/sql-connect.php");	
    //使用预编译，防止注入
    $sql = "INSERT INTO `test_user`(`username`, `password`) values (?,?) ";
    $mysqli_stmt = $mysqli->prepare($sql);
    //3、绑定参数(给?传值,必须传变量)
    $user = $_POST['username'];
    $pass = md5($_POST['password']);
    $mysqli_stmt->bind_param("ss",$user,$pass);
    //4、执行
    $b = $mysqli_stmt->execute();
    if($b){
    	echo "<script>confirm('注册成功！！！');history.go(-1);</script>";
    }else{
    echo $mysqli_stmt->error."<script>confirm('注册失败！！！');history.go(-1);</script>";
    }
    $mysqli_stmt->close();
    $mysqli->close();
}

 ?>
 </body>
</html>