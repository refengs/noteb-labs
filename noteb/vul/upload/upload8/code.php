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
        echo "<//script>alert('".$_FILES["file"]["name"] . " 文件已经存在。 "."')<//code>/script>";
    }
    else
    {
        $name = strrev($_FILES['file']['name']);
        $name = strtolower($name); //转换为小写
        $array = explode('.',$name);  //获取.后面的名字
        $file_name=strtolower(rand(10000,99999).".".$array[0]);
        move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $file_name);
        // echo "<//script>alert('"."文件存储在: " . "../upload_cache/" .$file_name."')<//code>/script>";
        echo "<//script>alert('图片上传成功！！！')<//script>";
    }
}
</code>
</pre>
