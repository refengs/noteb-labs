<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 

header('Content-Type: text/html; charset=utf-8');
error_reporting(E_ALL^E_NOTICE^E_WARNING);//隐藏报错注意等信息
$username = 'admin@test.com';  //账号
$password = 'admin';  //密码

@libxml_disable_entity_loader(false); //开启从外部加载XML实体
$xml_post = @file_get_contents('php://input'); //接收ajax发来的xml格式信息
//以下是获取 DOM 文档节点并转换为 SimpleXML 节点：
$dom = new DOMDocument(); 
$dom->loadXML($xml_post, LIBXML_NOENT | LIBXML_DTDLOAD); 
$creds = simplexml_import_dom($dom);
// var_dump($creds);
$user = $creds->username; //提取username节点
$pass = $creds->password; //提取password节点
if ($username == $user && $password == $pass) {
	$result =  '<result><code>0</code><msg>登录成功</msg></result>';
	echo $result;

}else{
	$result =  '<result><code>1</code><msg>登录失败</msg></result>';
	echo $result;
}



 ?>
