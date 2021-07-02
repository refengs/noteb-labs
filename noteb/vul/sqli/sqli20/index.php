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
    <link rel="stylesheet" href="../static/css/style.css">
    <link rel="stylesheet" href="../../../src/css/layui.css">
</head>
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
<body>

<style>
    body {
        background: url(../static/images/57.jpg) center #253646;
    }
</style>
<form name="form1" method="post" action="">
<div class="container1">
    <div class="lewm">
        <p>登陆账号</p>
<!--         <img src="../images/logo1.png" alt=""> -->
    </div>
    <div class="loginbox"style="width: 80%;">
        <img class="htlogo" src="../images/logo.png" alt="">
        <div class="log_item" >

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
    <input type="submit" value="登陆">
    <a class="lozc" href="./register.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注册</a>
';
}else{
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    //包含连接数据库文件
    include("../sql-connect.php");
    $username = str_replace("'","\\'",$username);
    // 记录步骤
    $fw = new writeFW;
    $fw->fw($username,"sqli20_login.txt");
    $sql = "select * from sqli_20 where username='$username' and password='$password'";
    $result = mysqli_query($mysqli,$sql);
    if ($result) {
        $row = mysqli_fetch_array($result);
        if ($row) {
            //判断输入的用户名密码是否跟数据库查询到的一致
            if ($username==$row['username']&&$password==$row['password']) {
                //查询所有的用户名密码
                $sql_all = "select username from sqli_20";
                $result_all = mysqli_query($mysqli,$sql_all);
                $data = array();
                while ($row = mysqli_fetch_array($result_all)) {
                    $data[] = $row;
                }
                echo "<table class='layui-table'>
                      <colgroup>
                        <col width='200'>
                        <col width='300'>
                        <col>
                      </colgroup>
                      <thead>
                        <tr>
                          <th>用户名</th>
                          <th>密码</th>
                        </tr> 
                      </thead>
                      <tbody>";
                foreach ($data as $key => $value) {
                    $user = $value['username'];
                    $sql_seach = "select username , password from sqli_20 where username='$user'limit 0,1 ";
                    $result_seach = mysqli_query($mysqli,$sql_seach);
                    $row_seach = mysqli_fetch_array($result_seach);
                    $user=$row_seach["username"];
                    $pass=$row_seach["password"];
                    echo "
                        <tr>
                          <td>$user</td>
                          <td>$pass</td>
                        </tr>";
                }
                echo " </tbody>
                    </table>";
            }
        }else{
            echo "登陆失败！";
        }
    }else{
        // 输出错误
        print_r(mysqli_error($mysqli));
    }



}   
     ?>
     </div>

</div>

</form>

</body>
<script src="../../../src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</html>