 <?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>分享中……</title>
</head>
<body>
<?php   
/*  
功能： 取得 URL 页面上的 <title> 内容   
参数：$_GET['url']  
*/   
// 设置最长执行的秒数   
ini_set ("expect.timeout", 30);   
set_time_limit(30);     
// 检查 URL   
if(!isset($_GET['url']) || $_GET['url'] == ''){    
   echo "URL 错误";   
   exit;   
}     
/* 取得 URL 页面数据 */   
// 初始化 CURL   
$ch = curl_init();   
// 设置 URL    
curl_setopt($ch, CURLOPT_URL, $_GET['url']);    
// 让 curl_exec() 获取的信息以数据流的形式返回，而不是直接输出。   
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);   
// 在发起连接前等待的时间，如果设置为0，则不等待   
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 0);   
// 设置 CURL 最长执行的秒数   
curl_setopt ($ch, CURLOPT_TIMEOUT, 30);   
// 尝试取得文件内容   
$store = curl_exec ($ch);      
// 检查文件是否正确取得   
if (curl_errno($ch)){   
   echo "无法取得 URL 数据";   
   echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
   //echo curl_error($ch);/*显示错误信息*/   
   exit;   
}   
// 关闭 CURL   
curl_close($ch);     
// 解析 HTML 的 <head> 区段   
preg_match("/<head.*>(.*)<\/head>/smUi",$store, $htmlHeaders);   
if(!count($htmlHeaders)){   
   echo "无法解析数据中的 <head> 区段"; 
   echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";  
   exit;   
}       
      
// 取得 <head> 中 meta 设置的编码格式   
if(preg_match("/<meta[^>]*http-equiv[^>]*charset=(.*)(\"|')/Ui",$htmlHeaders[1], $results)){   
   $charset =  $results[1];   
}else{    
   $charset = "None";   
}   
   
// 取得 <title> 中的文字    
if(preg_match("/<title>(.*)<\/title>/Ui",$htmlHeaders[1], $htmlTitles)){   
   if(!count($htmlTitles)){   
       echo "无法解析 <title> 的内容";   
       echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
       exit;   
   }     
   // 将  <title> 的文字编码格式转成 UTF-8   
   if($charset == "None"){   
       $title=$htmlTitles[1];   
   }else{   
       $title=iconv($charset, "UTF-8", $htmlTitles[1]);   
   }   
   echo "<!--  ".$title."-->"; //输出标题  
	echo "分享成功";
	echo "<br><a href='javascript:history.go(-1)'>返回上一步</a>";
}   
?>
</body>

</html>