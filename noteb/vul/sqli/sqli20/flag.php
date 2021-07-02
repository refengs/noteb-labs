<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>B计划</title>
	<link rel="stylesheet" href="../../../src/css/layui.css">
	<style type="text/css">
body {
	background-image: url(../../../src/images/bg.png);
	background-size: 100%;
}

</style>
	<script src="../../../src/layui.js"></script>
	<script type="text/javascript" src="../../../src/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="../../../src/jquery.fireworks.js"></script>
	<script>
	//JavaScript代码区域
	layui.use('element', function(){
	  var element = layui.element; 
	});
function ok() {
    //弹出层提示
	layui.use('layer', function(){
	var layer = layui.layer;
	layer.msg('恭喜少侠！flag正确！',{anim:1,icon:1,time:10000,closeBtn:1,shade:0.9});
	}); 
	$('body').fireworks({ 
	  sound: false, // sound effect
	  opacity: 0.9, 
	  width: '100%', 
	  height: '80%',
	  top: '20%' 
	});
}
function no() {
    //弹出层提示
	layui.use('layer', function(){
	var layer = layui.layer;
	layer.msg('少侠！搞事情？？？',{anim:6,icon:3,time:10000,closeBtn:1,shade:0.9});
	}); 
}
function error() {
    //弹出层提示
	layui.use('layer', function(){
	var layer = layui.layer;
	layer.msg('少侠！flag错误！再来一次吧!',{anim:2,icon:5,time:10000,closeBtn:1,shade:0.9});
	}); 
}
	</script>
</head>
<body>
<?php 
if (empty($_POST["flag"])) {
	echo "<script>no();</script>";
}else{
	$flag = ($_POST['flag']);
	if ($flag=="flag{1efdv}") {
		echo "<script>ok() ;setTimeout('history.go(-1)', 6000 );</script>";
	}else{
		echo "<script>error() ;setTimeout('history.go(-1)', 1000 );</script>";
	}
}

 ?>
	
</body>
</html>