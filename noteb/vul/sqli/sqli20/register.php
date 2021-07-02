<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>B计划</title>
    <meta name="viewport"
          content="width=device-width, initial-scale=1, minimum-scale=0.3, maximum-scale=2.0, user-scalable=no">

    <!-- css -->
    <link rel="shortcut icon" href="#" />
    <link rel="stylesheet" href="./src/css/layui.css">

    <link rel="stylesheet" href="../static/css/style.css">
<?php 
// 判断登录
session_start();
if (empty($_SESSION["NotebUser"])) {
    header("Location:../../../login.php");
}
// 输入s参数查看源代码
if(isset($_GET['s'])){
    show_source(__FILE__);
    exit;
}
?>
</head>
<body>

<style>
    body {
        background: url(../static/images/57.jpg) center #253646;
    }
</style>
<form name="form1" method="post" action="">
<div class="container">
    <div class="lewm">
        <p>注册账号</p>
       <!--  <img src="../images/logo1.png" alt=""> -->
    </div>
    <div class="loginbox">
        <img class="htlogo" src="../images/logo.png" alt="">
        <div class="log_item">
               

    <?php 
    if (empty($_POST['username'])||empty($_POST['password'])) {
        echo '    
         <span>
                    <img src="../static/picture/zh.png" alt="">
                </span>
            <input name="username" type="text" id="username"  placeholder="请输入账号">
        </div>
        <div class="log_item">
                <span class="lobg">
                    <img src="../static/picture/pass.png" alt="">
                </span>
            <input name="password" type="password" id="password" placeholder="请输入密码">
        </div>
    </div>
    <div class="x_btns x_btn3">
        <input type="submit" value="注册">
        <a class="lozc" href="./index.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;登陆</a>
    ';
    }else{
        $username=$_POST['username'];
        $password=md5($_POST['password']);
        //包含连接数据库文件
        include("../sql-connect.php");
        $username = str_replace("'","\\'",$username);
        // 记录步骤
        $fw = new writeFW;
        $fw->fw($username,"sqli20_register.txt");
        $sql = "INSERT INTO `sqli_20`( `flag`, `username`, `password`) values ('','$username','$password') ";
        $result = mysqli_query($mysqli,$sql);
        if ($result) {
            echo "<script>alert('注册成功');history.go(-1);</script>";
        }else{
            print_r(mysqli_error($mysqli));// 输出错误
        }



    }   
         ?>
     </div>

</div>

</form>

</body>
<script src="./src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>

</html>