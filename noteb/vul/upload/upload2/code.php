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
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $_FILES["file"]["name"]);
        echo "<//script>alert('"."文件存储在: " . "../upload_cache/" . $_FILES["file"]["name"]."')<//script>";
    }
}
</code>
</pre>
