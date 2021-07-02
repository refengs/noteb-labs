<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>fckedit</title>
</head>
<body>
<?php 
//包含fckeditor类
include("./fckeditor.php") ;
//设置编辑器路径
$sBasePath = "./";
//创建一个Fckeditor，表单的名称为ipaddr
$oFCKeditor = new FCKeditor('ipaddr') ;
$oFCKeditor->BasePath  = $sBasePath ;
//设置表单初始值
$oFCKeditor->Value  = 'This is some <strong>sample text</strong>' ;
$oFCKeditor->Create() ;


 ?>	
</body>
</html>