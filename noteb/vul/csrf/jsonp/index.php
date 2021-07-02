<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>个人中心</title>
<link rel="stylesheet" href="../../../src/css/layui.css">
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
</head>
<body>


<table class="layui-table">
  <colgroup>
    <col width="10%">
    <col width="25%">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>id</th>
      <th>姓名</th>
    </tr> 
  </thead>
  <tbody>
    <tr id="test_id" class="test_id">

	</tr> 
  </tbody>
</table>	
</body>
<script src="../../../src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  element = layui.element;
  $ = layui.jquery;

$.ajax({  
    type : "get",  
    async:false,  
    url : "./jsonp.php?jsoncallback=?",  
    dataType : "jsonp",//数据类型为jsonp  
    jsonp: "jsonpCallback",//服务端用于接收callback调用的function名的参数  
    success : function(data){  
        $("#test_id").append("<th>"+data.id+"</th>");
        $("#test_id").append("<th>"+data.name+"</th>");
    },  
    error:function(){  
        alert('请求数据错误');  
    }  
});  
});

</script>

</html>