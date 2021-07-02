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
    <col width="5%">
    <col width="10%">
    <col width="50%">
    <col width="35%">
    <col>
  </colgroup>
  <thead>
    <tr>
      <th>用户名</th>
      <th>密码</th>
      <th>地址</th>
      <th>联系方式</th>
    </tr> 
  </thead>
  <tbody>
    <tr>
    <?php 
if (!empty($_GET['id'])) {
	$id =$_GET['id'];
	switch ($id) {
		case '1':
				echo "<td>admin</td>
			    <td>admin@5320</td>
			    <td>银河系太阳系地球亚洲中国广东省</td>
			    <td>喜欢迪丽冷巴</td></tr>
			    <tr><td>test</td>
			    <td>test</td>
			    <td>银河系太阳系地球亚洲中国广东省</td>
			    <td>12345678901</td></tr>
			    <tr><td>c1o2a3</td>
			    <td>abc5320</td>
			    <td>银河系太阳系火星油麦田</td>
			    <td>667171</td></tr>";
			break;
		case '2':
				echo "<td>test</td>
			    <td>test</td>
			    <td>银河系太阳系地球亚洲中国广东省</td>
			    <td>12345678901</td></tr>";			
			break;
		case '3':
				echo "<td>c1o2a3</td>
			    <td>abc5320</td>
			    <td>银河系太阳系火星油麦田</td>
			    <td>667171</td></tr>";			
			break;
	}
	// if ($id==1) {
	// echo "<td>admin</td>
	//     <td>admin</td>
	//     <td>银河系太阳系地球亚洲中国广东省</td>
	//     <td>13123412341</td></tr>
	//     <tr><td>test</td>
	//     <td>test</td>
	//     <td>银河系太阳系地球亚洲中国广东省</td>
	//     <td>12345678901</td></tr>
	//     <tr><td>c1o2a3</td>
	//     <td>abc5320</td>
	//     <td>银河系太阳系火星油麦田</td>
	//     <td>667171</td></tr>";
	// 	}	

}
 ?>
  </tbody>
</table>	
</body>
<script src="../../../src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
</script>

</html>