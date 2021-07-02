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
    //识别文件类型
    $uploaded_name = $_FILES[ 'file' ][ 'name' ];
    $uploaded_type = $_FILES[ 'file' ][ 'type' ];
    $uploaded_size = $_FILES[ 'file' ][ 'size' ];
       if( ( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png" ) and
            ( $uploaded_size < 100000 ) ) {
            if( !move_uploaded_file( $_FILES[ 'file' ][ 'tmp_name' ], "../upload_cache/".$_FILES["file"]["name"]) ) {
                echo "<//script>alert('图片上传失败')<//script>";
            }
            else {
                echo "</script>alert('"."文件存储在: " . "../upload_cache/" . $_FILES["file"]["name"]."')<//script>";
            }
        }
        else {
            echo "<pre>只允许上传jpg或者png格式的图片文件,且文件大小不能超过100k</pre>";
        }    
    }
}
</code>
</pre>
