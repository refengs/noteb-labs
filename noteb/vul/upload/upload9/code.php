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
        $filename = strtolower($_FILES["file"]["name"]);
        // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
        if (move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $filename)) {
            $array = explode('.',$name);  //获取.后面的名字
            if (($array[0]!=="jpg")||($array[0]!=="png")||($array[0]!=="gif")) {
                // echo $filename;
                echo "只允许上传.jpg|.png|.gif类型文件！";
                // sleep(20);
                unlink("../upload_cache/" . $filename);
            }else{
                echo "<//script>alert('"."文件存储在: " . "../upload_cache/" . $filename."')<//script>";
            }
        }else{
            echo "<//script>alert('文件上传失败')<//script>";
        }
        
    }
}
</code>
</pre>
