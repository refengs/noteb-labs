<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="GBK">
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
        <h2 class="passReset-title text-center">宽字节注入</h2>
        <div class="row text-center verify-phone">
        <?php 
		//判断ID是否为空
		if (empty($_GET['id'])) {
			echo "请输入ID";
		}else{
			include("../sql-connect.php");
			//从URL获取的ID赋值给$id
			$id = addslashes($_GET['id']);//进行转义
			// 记录步骤
			$fw = new writeFW;
			$fw->fw($id,"sqli3.txt");
			//包含数据库配置文件
			include('../config.php');
			$con = new MYSQLI($host,$dbuser,$dbpass,$dbname);
			//GBK编码 使用%df%27绕过
			//例如%df%27%20and%201=1%20--+
			$con->query('set names gbk');
			!$con->connect_error or die("连接失败".$con->connect_error);
			$sql = "select * from sqli_3 where id ='{$id}'";
			$result = mysqli_query($con,$sql);
			if ($result) {
				$row = mysqli_fetch_array($result);
				echo "你的用户名为：".$row['username'];
				echo "<br>";
				echo "你的密码为：".$row['password'];
			}
			else{
				print_r(mysqli_error($con));
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

