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
	else
	{
	    // 如果 upload 目录不存在该文件则将文件上传到 upload 目录下
	    move_uploaded_file($_FILES["file"]["tmp_name"], "../upload_cache/" . $_FILES["file"]["name"]);
	    echo "<script>alert('"."文件存储在: " . "../upload_cache/" . $_FILES["file"]["name"]."')</script>";
	}
}
 ?>
<div class="layui-upload">
<form enctype="multipart/form-data" method="post" name="upload" onsubmit="return checkFile()" >
  <button type="button" class="layui-btn layui-btn-normal" id="test8" onclick="document.getElementById('upload_test').click()">选择文件</button>
  <input class="layui-upload-file" type="file" accept="" name="file" id="upload_test" >
  <button type="submit" class="layui-btn" id="test9" >开始上传</button>

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
	layer.alert('前端JS限制，尝试禁用JS或者抓包绕过',{title:'tips',anim:6,icon:3,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
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
function checkFile() {
    var file = document.getElementsByName('file')[0].value;
    if (file == null || file == "") {
        alert("你还没有选择任何文件，不能上传!");
        return false;
    }
    //定义允许上传的文件类型
    var allow_ext = ".jpg|.jpeg|.png|.gif|.bmp|";
    //提取上传文件的类型
    var ext_name = file.substring(file.lastIndexOf("."));
    //alert(ext_name);
    //alert(ext_name + "|");
    //判断上传文件类型是否允许上传
    if (allow_ext.indexOf(ext_name + "|") == -1) {
        var errMsg = "该文件不允许上传，请上传" + allow_ext + "类型的文件,当前文件类型为：" + ext_name;
        alert(errMsg);
        return false;
    }
}
</script>


</html>