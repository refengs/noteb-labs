<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no">
    <title>B计划</title>
    <link href="../css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../css/reset-forum.css?v=03251708">
<link rel="stylesheet" href="../css/common.css?v=06051852">    <link rel="stylesheet" href="../css/pass-reset.css">
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
<header id="header">
    <!-- 头部信息条 -->
    <section class="header-info">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 header-info-left">
                    <h2 class="header-info-title"><a href="#"><img src="../images/logo1.png" alt="logo"></a></h2>
                </div>
                <div class="col-xs-6 header-info-left">
                    <h2  class="header-info-title-right"><a href="#"><img src="../images/logo.png" alt="logo"></a></h2>
                </div>
            </div>
        </div>
    </section>
</header>
<div class="container">
    <section id="passReset" class=" center-block">
        <h2 class="passReset-title text-center">POST注入2:XX型注入</h2>
        <div class="row text-center verify-phone">
         <?php 
        if (empty($_POST['username']) || empty($_POST['password'])) {
            echo '   <form action=""  class="form-horizontal col-md-7 col-md-offset-2" method="POST">
             <div class="form-group">
                <label for="inputPhone" class="col-xs-3 control-label">用户名</label>
                <div class="col-sm-9 col-xs-9">
            <input type="text" name="username" class="form-control" id="username" placeholder="填写你的用户名">
            </div>
                </div>
            <div class="form-group">
                <label for="inputPhone" class="col-xs-3 control-label">密码</label>
                <div class="col-sm-9 col-xs-9">
            <input type="text" name="password" class="form-control" id="password" placeholder="填写你的密码">
            </div>
                </div>
            <div class="form-group  text-center">
                    <div class="col-md-offset-4 col-xs-offset-3">
                        <button class="btn btn-reister col-md-10 col-xs-8 next-step">登陆</button>
                    </div>
                </div>
            </form>';
        }else{
             //包含连接数据库文件
            include("../sql-connect.php");
            $username = $_POST['username'];
            $password = md5($_POST['password']);
            // 记录步骤
            $wt = $username."           ".$password;
            $fw = new writeFW;
            $fw->fw($wt,"sqli11.txt");
            $sql = "select username,password from sqli_11 where username=('$username') and password=('$password') limit 0,1";
            $result = mysqli_query($mysqli,$sql);
            if ($result) {
                $row = mysqli_fetch_array($result);
                if ($row) {
                    echo "<b>登陆成功！</b><br>";
                    echo "你的用户名为：".$row['username'];
                    echo "<br>";
                    echo "你的密码为：".$row['password'];
                }else{
                    echo "<b>登陆失败！</b><br>";
                }
            }else{
                print_r(mysqli_error($mysqli));
                 }
              }

          ?>
            <div class="col-xs-10 line col-xs-offset-1"></div>
            <p class="col-xs-10 col-xs-offset-1 text-center tip">如遇到问题请联系客服找回用户名或重置密码</p>
             
                    </div>
    </section>
<p class="col-xs-10 col-xs-offset-1 text-center tip">    	
                Copyright @  C1O2A3 All Rights Reserved</p>
</body>

</html>

