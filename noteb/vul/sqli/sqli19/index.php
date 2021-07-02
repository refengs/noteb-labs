<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>B计划</title>
  <link rel="stylesheet" href="../../../src/css/layui.css">
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
  <style>
*{
 margin: 0;
 padding: 0;
}
#guide_panel{
 width: 98%;
 margin: 0 auto;
}
#row_panel{
 width: 98%;
 height: 720px;
 margin: 0 auto;
 /*border: solid 1px red;*/
}
#row_panel .table-panel{
 width: 100%;
 height: 500px;
 float: left;
 text-align: center;
}
#row_panel .table-panel p{
 color:#BBBBBB;
}
#row_panel .bottom-panel{
 width: 100%;
 height: 40px;
 background: #F0F0F0;
 float: left;
 margin-top: 20px;
 text-align: right;
}
#row_panel .bottom-panel span{
 line-height: 40px;
 font-size: 18px;
}

</style>
</head>
<body>
<br><br><br>
<div id="guide_panel">
 <blockquote class="layui-elem-quote">delect注入</blockquote>

</div>
 <div id="row_panel">
 <div class="table-panel">
<table class="layui-table">
  <colgroup>
    <col width="40%">
    <col width="40%">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>用户名</th>
      <th>密码</th>
      <th>操作</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
      <td>admin</td>
      <td>admin</td>
      <td><form action="" method="POST">
      <input type="hidden" name="username"  placeholder="username"  value="admin">
          <button class="layui-btn layui-btn-danger" lay-submit lay-filter="formDemo">删除</button>  
      </form></td>
    </tr>
  </tbody>
</table>
<?php 

if (!empty($_POST['username'])) {
    //包含连接数据库文件
    include("../sql-connect.php");
    $username = $_POST['username'];
    // 记录步骤
    $wt = $username;
    $fw = new writeFW;
    $fw->fw($wt,"sqli19.txt");
    $sql = "DELETE FROM sqli_19 where username='$username' limit 0,1";
    $result = mysqli_query($mysqli,$sql);
    if ($result) {
      echo "<script>alert('删除admin成功')</script>";
    }else{
       print_r(mysqli_error($mysqli));
       echo "<br>删除admin失败！";
    }

    
}
 ?>
 <div class="bottom-panel">
  <span>C1O</span><span style="color: red;margin-right: 15px" id="RechargeCount_TotalQty">2A3</span>
  <span>明天</span><span style="color:red;margin-right: 20px" id="RechargeCount_TotalMoney">有雨</span>
 </div>
 </div>
</body>
<script src="../../..//src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});

</script>
</html>