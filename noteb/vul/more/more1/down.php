<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../../login.php");
}
if (!empty($_GET['down'])) {
    $filename = $_GET['down'];
    header('content-type:image/jpeg');
    echo file_get_contents($filename);
}else{
	echo "下载参数出错";
}
