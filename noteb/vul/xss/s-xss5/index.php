<!DOCTYPE HTML>
<html class=""> <!--start html-->
<head> <!--start head-->
<meta charset="UTF-8">
<title>留言板 - B计划</title>
<link rel="stylesheet" href="../static/css/font-awesome.min.css" />
<link rel="stylesheet" href="../static/css/owo.min.css" />
<link rel="stylesheet" href="../static/css/atom-one-light.css">
<link rel="stylesheet" href="../static/css/jquery.fancybox.min.css">
<link rel="stylesheet" href="../static/css/main.61.css">
<link rel="stylesheet" href="../static/css/scheme-dark15.css">
<!--JS-->
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
//包含连接数据库文件
include("../../sqli/sql-connect.php");
 ?>
<script>
window.alert = function()  
{     
confirm("flag{get_sxss5-eeeaee!!!}");
}
</script>
<body class="flex flex-direction-column">
<?php 
if (empty($_POST['text'])) {
}else{
    $content=$_POST['text'];
    $content=htmlspecialchars($content);
    $content=str_ireplace("'","&quot;",$content);
    $a=$_POST['herf'];
    $a=htmlspecialchars($a);
    $a=str_ireplace("'","&quot;",$a);
//使用预编译，防止注入
    $sql = "INSERT INTO `s-xss5`( `text` , `herf` ) values (?,?) ";
    $mysqli_stmt = $mysqli->prepare($sql);
    //3、绑定参数(给?传值,必须传变量)
    $text=$content;
    $herf=$a;
    $mysqli_stmt->bind_param("ss",$text,$herf);
    //4、执行
    $b = $mysqli_stmt->execute();
    if($b){
    echo "<script>confirm('留言成功！！！');history.go(-1);</script>";
    }else{
    echo $mysqli_stmt->error."<script>confirm('留言失败！！！');history.go(-1);</script>";
    }
    $mysqli_stmt->close();
    $mysqli->close();
}

 ?>


<div class="bg" style="background-image:url(../static/images/20130527182017_dqhh4.jpeg)"></div>

<div id="comments" style="animation-delay:0.4s">
                       <link rel="stylesheet" href="../static/css/player.css">        <div id="respond-page-16" class="respond">
            <h3 id="response" class="widget-title text-left" style="color:var(--text-color)">添加新友链</h3>
            <form method="post" action="" id="comment-form">

            <p style="margin-top:0">
                    <input class="input-area" rows="5" name="herf" id="textarea" placeholder="在这里输入你的网站地址..." style="resize:none;">
                     <input class="input-area" rows="5" name="text" id="textarea" placeholder="在这里输入你的网站名称..." style="resize:none;">
                <p class="comment-buttons" style="margin-top: 32px">
                    <button id="comment-submit-button" type="submit" class="submit">提交友链</button>
                </p>
            </form>
        </div>
                            <h3 class="comment-separator">
                <div class="comment-tab-current">
                    <span class="comment-num" style="color:var(--text-color)">友链列表</span>
                </div>
            </h3>
            <div class="comment-list">   
 <?php 
    $sql = "SELECT * FROM `s-xss5` order by id DESC ";
    $result = mysqli_query($mysqli,$sql);
    $data = array();
    if ($result) {
        while ($row = mysqli_fetch_array($result)) {
            $data[] = $row;
        }
    }
    // var_dump($data);
    foreach ($data as $key => $value) {
        $text = $value['text'];
        $herf = $value['herf'];
        $id = $value['id'];
    echo "<div class='comment-content'> <a href='$herf'>$text</a></div><br>";

    }

 ?>

                <!-- ====头像在右边的      -->
<!--                 <div class='comment-wrap'>
                        <div class='flex comment-item 
                     comment-odd comment-by-author'>
                            <div class='comment-header flex flex-direction-column'>
                                <img class='avatar' src='../static/picture/fa89556a350544d5be18c01ef31fa25a.gif' alt='refeng' width='50' height='50' /></a>
                                <span></span>
                            </div>
                            <div class='comment-body flex flex-direction-column'>
                                <span class='comment-meta'><i class='fa fa-user-o'></i>&nbsp<b><a href='' rel='external nofollow'>refeng</a></b></span>
                                <div class='comment-content'><p>来了老弟</p></div>
                            </div>
                        </div>
                    </div> -->
                <!-- ==========头像在左边的 -->
<!--                 <div class='comment-wrap'>
                        <div class='flex comment-item comment-even'>
                            <div class='comment-header flex flex-direction-column'>
                                <img class='avatar' src='../static/picture/5470c752e4c94a469feb559d38440308.gif' alt='refeng' width='50' height='50' /></a>
                                <span></span>
                            </div>
                            <div class='comment-body flex flex-direction-column'>
                                <span class='comment-meta'><i class='fa fa-user-o'></i>&nbsp<b><a href='' rel='external nofollow'>test</a></b></span>
                                <div class='comment-content'><p>test</p></div>
                            </div>
                        </div>
                    </div> -->

            </div> 
    </div>
</div>
<div id="footer-info" style="font-size:0.9em;color:var(--text-color);background:none;text-align:center;line-height:1.5;margin-bottom:50px">
    <a href="" target="_self">© B计划</a><br>
    <a href="" target="_blank">Note-B</a> • <a href="" targte="_blank">C1O2A3</a><br>
    <b></b></div>    </div>
</body>
</html>
