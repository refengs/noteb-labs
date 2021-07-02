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
  <title>rm删除</title>
</head>
<body>
<?php   
$file = "./upload_cache";
//遍历upload_cache文件夹的文件并且删除文件的函数
function del($file){
    //遍历文件
    $temp = scandir($file);
    foreach ($temp as $key => $value) {
        //剔除.和..
        if ($value !== "."&&$value !="..") {
            //判断是不是文件夹
            if (is_dir($file."/".$value)) {
                //是文件夹的话再调用这个函数
                del($file."/".$value);
                //删除文件夹
                rmdir($file."/".$value);
            }else{
                //删除文件
                unlink($file."/".$value);
            }  
        }
    }
    echo "清理完成";
}
//新增说明文件
function NewReadme(){
    $temp = "./upload_cache/readme.php";
    $fp = fopen($temp, "a");
    $php = "<?php echo \"这是用来保存上传文件的文件夹，请勿删除\"; ?>";
    fwrite($fp,$php);
    fclose($fp);
}
//调用函数
del($file);
NewReadme();
?>

</body>
</html>