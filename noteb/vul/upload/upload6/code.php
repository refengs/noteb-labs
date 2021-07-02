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
    else{
    //识别文件类型
    $file_name = $_FILES['file']['tmp_name'];
    $allow_ext = array('image/png', 'image/gif', 'image/jpeg', 'image/bmp');
    $img_arr = getimagesize($file_name);
    $file_ext = $img_arr['mime'];
    if (in_array($file_ext, $allow_ext)) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $_FILES["file"]["name"])) {
                echo "<//script>alert('"."文件存储在: " . "../upload_cache/" . $_FILES["file"]["name"]."')<//script>";
            }
        } else {
            echo "<//script>alert('此文件不允许上传')<//script>";
        }
    }
}
</code>
</pre>
