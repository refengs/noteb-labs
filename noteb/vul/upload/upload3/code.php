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
        $name = strrev($_FILES['file']['name']);
        $array = explode('.',$name);  //获取.后面的名字
        if (($array[0]=="php")||($array[0]=="PHP")) {
            echo "请不要上传敏感文件";
        }else{
            // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        $file_name=strtolower($_FILES["file"]["name"]);
        move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $file_name);
        echo "<//script>alert('"."文件存储在: " . "../upload_cache/" .$file_name."')<//script>";
        }
    }
}
</code>
</pre>
