<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>B计划</title>
  <link rel="stylesheet" href="../../../src/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header">
    <div class="layui-logo">B计划平台</div>
    <!-- 头部区域（可配合layui已有的水平导航） -->
    <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="<?php echo 'index.php?get=test.php' ?>">首页</a></li>
    </ul>
  </div>
  
  <div class="layui-side layui-bg-black">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->

    </div>
  </div>
  
  <div class="layui-body">
    <!-- 内容主体区域 -->
<?php 
if (!empty($_GET['get'])) {
	$file = $_GET['get'];
  $file = str_replace( array( "http://", "https://" ), "", $file );
  $file = str_replace( array( "../", "..\"" ), "", $file ); //将含有敏感词删除
  $file = $file; 
	include($file);//包含get参数的文件
}else{
	echo '<div style="padding: 15px;">hello,world!</div>';
}
?>
  </div>
  
  <div class="layui-footer">
    <!-- 底部固定区域 -->
    © B计划 - C1O2A3
  </div>
</div>
<script src="../../../src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>
</body>
</html>