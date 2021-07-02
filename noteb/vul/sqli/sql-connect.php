<?php 
//包含数据库配置文件
include('config.php');
//关闭错误报告
@error_reporting(0);
//加个@是屏蔽错误的意思，连接数据库
$mysqli = new MYSQLI($host,$dbuser,$dbpass,$dbname);
$mysqli->query('set names utf8');
!$mysqli->connect_error or die("连接失败".$mysqli->connect_error);

/**
 * 写入文本文件
 */
class writeFW
{
	
	function fw ($id, $path) {
		// $this->path   = $path;
		// $this->id   = $id;
		$fp=fopen("../../../log/".$path,'a');
			fwrite($fp,'这是你输入的:   '.$id."\n");
			fclose($fp);
	}
}
?>