<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <title>B计划渗透靶场</title>
  <link rel="stylesheet" href="./src/css/layui.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
  <div class="layui-header container">
    <div class="layui-logo" >B计划平台</div>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:login.php");
}
 ?>
    <!-- 头部区域（可配合layui已有的水平导航） -->
<!--     <ul class="layui-nav layui-layout-left">
      <li class="layui-nav-item"><a href="">控制台</a></li>
      <li class="layui-nav-item"><a href="">商品管理</a></li>
      <li class="layui-nav-item"><a href="">用户</a></li>
      <li class="layui-nav-item">
        <a href="javascript:;">其它系统</a>
        <dl class="layui-nav-child">
          <dd><a href="">邮件管理</a></dd>
          <dd><a href="">消息管理</a></dd>
          <dd><a href="">授权管理</a></dd>
        </dl>
      </li>
    </ul> -->
    <ul class="layui-nav layui-layout-right">
      <li class="layui-nav-item">
        <a href="javascript:;">
          <img src="./src/images/8be7d1838d838cf92483476b064ee0e6_face.jpg" class="layui-nav-img">
          <?php if (empty($_SESSION['NotebUser'])) {
            echo "Note-B";
          }else{
            echo $_SESSION['NotebUser'];
          } 
          ?>
        </a>
        <dl class="layui-nav-child">
          <dd><a href="">B计划平台</a></dd>
          <dd><a href="">BY：C1O2A3</a></dd>
        </dl>
      </li>
      <li class="layui-nav-item"><a href="logout.php">退出</a></li>
    </ul>
  </div>
  
<!--   <div class="layui-side layui-bg-blue">
    <div class="layui-side-scroll">
      左侧导航区域（可配合layui已有的垂直导航）
      <ul class="layui-nav layui-nav-tree layui-bg-blue"  lay-filter="test">
        <li class="layui-nav-item"><a href="index.php">靶场说明</a></li>
        <li class="layui-nav-item layui-nav-itemed ">
          <a class="" href="javascript:;" >基础靶场</a>
          <dl class="layui-nav-child ">
            <dd ><a href="sqli.php" ><font color="#fff">sql注入 </font></a></dd>
            <dd><a href="javascript:;">XSS</a></dd>
            <dd><a href="javascript:;">CSRF</a></dd>
            <dd><a href="javascript:;">以及更多</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;" >CMS靶场</a>
          <dl class="layui-nav-child layui-bg-white">
            <dd><a href="javascript:;">列表一</a></dd>
            <dd><a href="javascript:;">列表二</a></dd>
            <dd><a href="">超链接</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item"><a href="./vul/sqli/sqli1/index.php">云市场</a></li>
        
      </ul>
    </div>
  </div> -->