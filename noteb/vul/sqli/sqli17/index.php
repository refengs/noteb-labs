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
        <h2 class="passReset-title text-center">头部注入||update注入</h2>
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
            $sql = "select username,password from sqli_17 where username=('$username') and password=('$password') limit 0,1";
            $result = mysqli_query($mysqli,$sql);
            if ($result) {
                // 将表中的账号和密码跟所输入的账号和密码进行一个比较
                $row = mysqli_fetch_array($result);
                if ($row) {
                        $db_username = $row['username'];
                        $db_userpass = $row['password'];
                        if ($db_username == $username && $db_userpass == $password) {
                            // 获取当前的信息，XFF头IP信息是可以伪造的，其他的ua也哟杨，accept也一样，还有host
                            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
                            $ua=$_SERVER['HTTP_USER_AGENT'];
                            $accept=$_SERVER['HTTP_ACCEPT'];
                            $host=$_SERVER['HTTP_HOST'];
                            //直接写入，未做处理，存在漏洞
                            $sql1 = "update sqli_17 set HTTP_X_FORWARDED_FOR = '{$ip}',HTTP_USER_AGENT ='{$ua}',HTTP_ACCEPT = '{$accept}',HTTP_HOST ='{$host}' where username='$username'";
                            $result1 = mysqli_query($mysqli,$sql1);
                            echo "记录信息如下：您的IP：$ip<br>您的UA头：$ua<br>您的accept：$accept<br>host：$host<br>";
                            // 记录步骤
                            $fw = new writeFW;
                            $wt = "\r\n记录信息如下：您的IP：$ip\r\n您的UA头：$ua\r\n您的accept：$accept\r\nhost：$host\r\n";
                            $fw->fw($wt,"sqli17.txt");
                            if ($result1) {
                                echo "已记录！";
                            }else{
                                print_r(mysqli_error($mysqli));
                                echo "<br>记录失败！";
                        }
                    }
                }else{
                    echo "查询失败";
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

