<?php
header('Content-type: application/json'); 
// session_start();
// if (empty($_SESSION["NotebUser"])) {
//   header("Location:../../../login.php");
// }
$jsoncallback = htmlspecialchars($_REQUEST ['jsoncallback']);//获取回调函数名
// var_dump($jsoncallback);
//json数据
//$json_data = '["id","user"]';
$json_data='({"id":"1","name":"Aaron","pass":"123456","flag":"flag{jsonp_get1}"})';
if ($jsoncallback) {
	echo $jsoncallback . "(" . $json_data . ")";//输出jsonp格式的数据
}
// echo $jsoncallback . "(" . $json_data . ")";//输出jsonp格式的数据
?>