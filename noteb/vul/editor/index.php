 <?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../login.php");
}
 ?>
<span style="font-size:14px;"><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
<meta http-equiv="content-type" content="text/html;charset=utf-8"> 
<title>B计划-富文本编辑器</title> 
</head> 
<body> 
<fieldset> 
<legend>编辑区</legend> 
<div> 
<form> 
字体颜色： 
<select onchange="setFontColor(this)"> 
<option value="black">Black </option> 
<option value="red">Red </option> 
<option value="green">Green </option> 
<option value="blue">Blue </option> 
</select> 
字体样式： 
<select onchange="setFontStyle(this)"> 
<option value="bold">Bold </option> 
<option value="italic">Italic </option> 
<option value="underline">Underline </option> 
<option value="striketthrough">StriketThrough </option> 
</select> 
字体名称： 
<select onchange="setFontFamily(this)"> 
<option value="serif">Serif </option> 
<option value="sans-serif">Sans-serif </option> 
<option value="monospace">Monospace </option> 
<option value="comic sans ms">Comic Sans </option> 
</select>
</form> 
上传图片：
<form action="upload.php" method="post"
enctype="multipart/form-data">
<label for="file">文件名:</label>
<input type="file" name="file" id="file" /> 
<input type="submit" name="submit" value="上传" />
</form>
<a href="?img=img"><button>查看图片目录</button></a>
</div> 
<br/> 
<div id="editableText" contenteditable="true" style="width:400px;min-height:100px;border:2px dashed #ccc"></div> 
<?php 
/***********************
readdir()函数
************************/
function listDir($dir)
{
	if(is_dir($dir))
   	{
     	if ($dh = opendir($dir)) 
		{
        	while (($file = readdir($dh)) !== false)
			{
     			if((is_dir($dir."/".$file)) && $file!="." && $file!="..")
				{
     				echo "<b><font color='red'>文件名：</font></b>",$file,"<br><hr>";
     				listDir($dir."/".$file."/");
     			}
				else
				{
         			if($file!="." && $file!="..")
					{
         				echo $file."<br>";
      				}
     			}
        	}
        	closedir($dh);
     	}
   	}
}

	if (!empty($_GET['img'])) {
		$dir = $_GET['img'];
		listDir($dir);
	}else{
		$dir = "./img";
	}
 ?>
</fieldset> 
<script type="text/javascript"> 
function setFontColor(obj) 
{ 
document.execCommand("forecolor",false,obj.value); 
} 
function setFontStyle(obj) 
{ 
document.execCommand(obj.value,false,null); 
} 
function setFontFamily(obj) 
{ 
document.execCommand("fontname",false,obj.value); 
} 
</script>

</body> 
</html></span> 
