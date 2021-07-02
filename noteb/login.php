<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>登陆-B计划漏洞演习平台</title>
  <link rel="stylesheet" href="./src/css/layui.css">
</head>
<script src="./src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
function ok() {
    //弹出层提示
    layui.use('layer', function(){
    var layer = layui.layer;
    layer.msg('登陆成功！！！正在跳转至首页',{anim:1,icon:1,time:10000,closeBtn:1,shade:0.9});
    }); 
    $('body').fireworks({ 
      sound: false, // sound effect
      opacity: 0.9, 
      width: '100%', 
      height: '80%',
      top: '20%' 
    });
}
function error() {
    //弹出层提示
    layui.use('layer', function(){
    var layer = layui.layer;
    layer.msg('登录失败！！！用户名或者密码错误',{anim:2,icon:5,time:10000,closeBtn:1,shade:0.9});
    }); 
}
</script>
<style>
/*登陆表单样式 start*/
.wrap{
    width: 100%;
    height: 100%;
 /*   background: url("../images/back.jpg") no-repeat;*/
    background-size: cover;
}
.loginForm{
    margin-left: 35%;
    margin-top: 10%;
    /*background-color: #cccccc;*/
    background-color: #e7e7e7;
    width: 400px;
    height: 400px;
    float: left;
    z-index: 9999;
    position: fixed;
    opacity: 0.75;
}
.usernameDiv{
    width: 300px;
    height: 40px;
    padding-left: 130px;
    padding-top: 30px;

}
.adminInput{
    width: 200px;
    height: 40px;
    font-size: 15px;
    border-radius: 0.5em;
    /*margin-left: auto;*/
    /*border: 1px solid #cccccc;*/
}
.passwordDiv{
    width: 300px;
    height: 40px;
    padding-left: 130px;
    padding-top: 28px;
}
.cardDiv{
    width: 120px;
    height: 40px;
    padding-top: 28px;
    padding-left: 14px;
    float: left;
}
.cardInput{
    width: 124px;
    height: 40px;
    font-size: 15px;
    border-radius: 0.5em 0em 0em 0.5em;
}
.codeDiv{
    width: 100px;
    height: 40px;
    padding-top: 28px;
    padding-right: 20px;
    float: left;
}
.codeInput{
    width: 80px;
    height: 40px;
    font-size: 15px;
    border-radius: 0em 0.5em 0.5em 0em;
    /*验证码样式*/
    font-family: Arial;
    font-style: italic;
    font-weight: bold;
    /*border: 0;*/
    letter-spacing: 2px;
    cursor: pointer;
}
i{
    position: absolute;
}
.adminIcon{
    font-size: 22px;
    margin-top: 8px;
    margin-left: 165px;
}
.logoHead{
    width: 250px;
    height: 60px;
    padding-left: 90px;
    padding-top: 25px;
}
.usernameLabel{
    width: 60px;
    height: 30px;
    font-size: 16px;
    float: left;
    margin-left: 55px;
    margin-top: 40px;
}
.submitLabel{
    width: 160px;
    height: 30px;
    font-size: 13px;
    float: left;
    margin-left: 55px;
    margin-top: 40px;
    cursor: pointer;
}
.usernameWrapDiv{
    width: 400px;
    height: 70px;
}
.submitDiv{
    width: 250px;
    height: 40px;
    padding-left: 10px;
    padding-top: 28px;
    float: left;
}
.submit{
    width: 280px;
    height: 50px;
    border-radius: 0.5em;
    margin: 0 0 0 45px;
}
img{
    position: absolute;
}
.imgStyle{
    width: 100%;
    height: 100%;
}
/*登陆表单样式 end*/

 *{  
            margin: 0px;  
            padding: 0px;  
        }  
        video{  
            position: fixed;  
            right: 0px;  
            bottom: 0px;  
            min-width: 100%;  
            min-height: 100%;  
            height: auto;  
            width: auto;  
            /*加滤镜*/
            /*filter: blur(15px); //背景模糊设置 */
            /*-webkit-filter: grayscale(100%);*/  
            /*filter:grayscale(100%); //背景灰度设置*/  
            z-index:-11
        }  
        source{  
            min-width: 100%;  
            min-height: 100%;  
            height: auto;  
            width: auto;  
        } 

</style>
<?php 
session_start();
include("./vul/sqli/sql-connect.php");
if (!empty($_POST['username'])&&!empty($_POST['password'])) {
    //使用预编译，防止注入
    $sql = "select username,password  from `users` where username=(?) and password=(?) limit 0,1";
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
        if (!empty($_SESSION["NotebUser"])) {
            unset($_SESSION["NotebUser"]);
        }
        $_SESSION["NotebUser"]=$name;
        echo $_SESSION["NotebUser"];
        echo '<script type="text/javascript">ok();
    　　</script>';
        echo '<script type="text/javascript">window.location.href="index.php";
    　　</script>';

    }else{
        echo "<script>error() </script>";
    }
    //如果是个数组需要遍历
    //while($mysqli_stmt->fetch()){
    //  echo "<br/>-----$id--$name---$email";
    // }
    //关闭预编译
    $mysqli_stmt->close();
    $mysqli->close();
}
?>

<body>
    <video id="v1" autoplay loop muted height="100%" width="100%">
        <source src="./src/videos/<?php echo rand(1,4);  ?>.mp4" type="video/mp4"  />
    </video>
    <div class="wrap">
        <!-- <img src="images/back.jpg" class="imgStyle"> -->
        <div class="loginForm">
            <form action="" method="POST">
                <div class="logoHead">
                    <h2 style="margin: 15px 0 0 55px">B计划-登陆</h2>
                </div>
                <div class="usernameWrapDiv">
                    <div class="usernameLabel">
                        <label>用户名:</label>
                    </div>
                    <div class="usernameDiv">
                        <i class="layui-icon layui-icon-username adminIcon"></i>
                        <input id="loginUsername" class="layui-input adminInput" type="text" name="username" placeholder="输入用户名" >
                    </div>
                </div>
                <div class="usernameWrapDiv">
                    <div class="usernameLabel">
                        <label>密码:</label>
                    </div>
                    <div class="passwordDiv">
                        <i class="layui-icon layui-icon-password adminIcon"></i>
                        <input id="loginPassword" class="layui-input adminInput" type="password" name="password" placeholder="输入密码">
                    </div>
                </div>
                <div class="usernameWrapDiv">
                    <div class="submitDiv">
                        <input id="loginBtn" type="submit" class="submit layui-btn layui-btn-primary" value="登录"></input>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
