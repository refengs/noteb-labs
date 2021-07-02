<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 
include_once('../header.php');
 ?>
<?php 
if (!empty($_FILES)) {
	if (file_exists("../upload_cache/" . $_FILES["file"]["name"]))
	{
	    echo "<script>alert('".$_FILES["file"]["name"] . " 文件已经存在。 "."')</script>";
	}
	else{
    //识别文件类型
    $file_name = $_FILES['file']['tmp_name'];
    $allow_ext = array('image/png', 'image/gif', 'image/jpeg', 'image/bmp');
    $name = $_FILES['file']['name'];
    $name =strtolower($name);
   	$suffix = substr(strrchr($name, '.'), 1);
    $allow_suffix = array('jpg','png','gif','bmp');
    $img_arr = getimagesize($file_name);
    $file_ext = $img_arr['mime'];
    $uploaded_type = $_FILES[ 'file' ][ 'type' ];
    if ((in_array($file_ext, $allow_ext) && in_array($suffix, $allow_suffix))&&(( $uploaded_type == "image/jpeg" || $uploaded_type == "image/png"|| $uploaded_type == "image/gif"|| $uploaded_type == "image/bmp" ))) {
            if (move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $_FILES["file"]["name"])) {
                echo "<script>alert('"."文件存储在: " . "../upload_cache/" . $_FILES["file"]["name"]."')</script>";
            }
        } else {
            echo "<script>alert('此文件不允许上传')</script>";
        }
	}
}
 ?>
<div class="layui-upload">
<form enctype="multipart/form-data" method="post" >
  <button type="button" class="layui-btn layui-btn-normal" id="test8" onclick="document.getElementById('upload_test').click()">选择文件</button>
  <input class="layui-upload-file" type="file" accept="" name="file" id="upload_test">
  <button type="submit" class="layui-btn" id="test9">开始上传</button>

</form>
</div>

		<div id="content">
<?php 
if (isset($_GET['showcode'])) {
	include_once "code.php";
}
 ?>
		</div>
	</div>
</div>
<div id="footer">
	<p>Copyright © C1O2A3 All Rights Reserved
<a href="../../../index.php" target="_blank">图片上传 image upload</a> 
	</p>
</div>
</div>
</body>
<script src="../../../src/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="../../../src/prism.js"></script>
<script type="text/javascript" src="../../../src/prism-line-numbers.min.js"></script>
<script type="text/javascript" src="../../../src/prism-php.min.js"></script>
<script src="../../../src/layui.js"></script>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
function ok() {
    //弹出层提示
	layui.use('layer', function(){
	var layer = layui.layer;
	layer.alert('校验文件后缀、文件头以及Content-Type',{title:'tips',anim:6,icon:3,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
	}); 
}
function clean_upload_file(){
	$.ajax({  
		type: 'get',  
		url: "../del.php",	
	}).success(function(data) {
		    //弹出层提示
			layui.use('layer', function(){
			var layer = layui.layer;
			layer.msg(data,{anim:1,icon:1,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
			}); 
	}).error(function() {
		    //弹出层提示
			layui.use('layer', function(){
			var layer = layui.layer;
			layer.msg('删除失败',{anim:1,icon:2,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
			}); 
	}); 
}
</script>


</html>