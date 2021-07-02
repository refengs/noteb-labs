<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<pre>
<code class="line-numbers language-php">
if (!empty($_FILES)) {
    if (file_exists("../upload_cache/" . $_FILES["file"]["name"]))
    {
        echo "<//script>alert('".$_FILES["file"]["name"] . " 文件已经存在。 "."')<//script>";
    }
    else
    {
        $name = strrev($_FILES['file']['name']); //获取上传文件名的倒序
        $array = explode('.',$name);  //获取.后面的名字
        $file_name = $array[0]; //将后缀名赋值给file_name
        $New_File_Name = str_ireplace("php","",$file_name); //替换后缀名的php，不区分大小写（单独获取后缀名是怕对文件名也替换）
        $rand_name = explode('.',$_FILES['file']['name']);//获取源文件的文件名，不需要后缀名
        $rand_name = $array[1]; //由于之前将后缀名传入数组，这次应该获取第二个（从0开始）
        $name = $rand_name.".".strrev($New_File_Name);
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        $file_name=strtolower($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $name);
        echo "<//script>alert('"."文件存储在: " . "../upload_cache/" .$name."')<//script>";
    }
}
</code>
</pre>
