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
        <h2 class="passReset-title text-center">COOKIE注入-后台</h2>
        <div class="row text-center verify-phone">
         <?php 
        include("../sql-connect.php");
        //从URL获取的ID赋值给$id
        //判断是否有username和password字段或者cookie的存在
        if (empty($_POST['username'])||empty($_POST['password'])){
            if (empty($_COOKIE['Noteb_user'])) {
                echo "<a href='index.php'>请先登录</a>";
            }else{
                //有cookie的话带入数据库查询，未做处理存在漏洞，且cookie太简单，可以伪造
                $cookie =$_COOKIE['Noteb_user'];
                // 记录步骤
                $wt = $cookie;
                $fw = new writeFW;
                $fw->fw($wt,"sqli21.txt");
                $sql = "select username,password from sqli_21 where username='$cookie' limit 0,1";
                $result = mysqli_query($mysqli,$sql);
                if ($result) {
                    $row = mysqli_fetch_array($result);
                    if ($row) {
                        echo "你的cookie是：".$row['username']."<br>";
                    }else{
                        echo "未查询到信息！";
                    }
                }else{
                        //查询不到结果代表没有这个用户直接删除cookie
                        setcookie("Noteb_user", "", time()-3600);
                        echo "<a href='index.php'>请先登录</a>";
                        // print_r(mysqli_error($mysqli));
                    }
            }
            
        }else{//判断如果提交的username和password不为空的话执行以下语句
                $username = $_POST['username'];
                $password = md5($_POST['password']);
                 $sql = "select username,password from sqli_21 where username=('$username') and password=('$password') limit 0,1";
                $result = mysqli_query($mysqli,$sql);
                if ($result) {
                    $row = mysqli_fetch_array($result);
                    if ($row) {
                         // 将表中的账号和密码跟所输入的账号和密码进行一个比较
                        $db_username = $row['username'];
                        $db_userpass = $row['password'];
                            //比对从数据库查询的值，防止万能密码
                        if ($db_username==$username && $db_userpass==$password) {
                            if (empty($_COOKIE['Noteb_user'])) {
                                setcookie("Noteb_user", $username, time()+3600);
                                echo "你的cookie是：".$username."<br>";
                            }else{
                                setcookie("Noteb_user", "", time()-3600);
                                setcookie("Noteb_user", $username, time()+3600);
                                echo "你的cookie是：".$username."<br>";
                            }
                        }
                    }else{
                        print_r(mysqli_error($mysqli));
                    }
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

