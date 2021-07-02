<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title>B计划一下，你不知道</title>
<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
        <style>
            a {
                color:#999;
            }
            .div_title{
                width:100%;
                height:40px;
            }
            .div_head{
                width:100%;
                height:125px;
                margin-top:85px;
            }
            .div_search{
                width:650px;
                height:30px;
                margin-top:15px;
                margin:0 auto;
            }
            .div_erWeiMa{
                width:100%;
                height:90px;
                margin-top:17%;
            }
            .div_foot{
                width:40%;
                height:30px;
                margin-top:20px;
                margin-left:30%;
                color:#999;
                text-decoration:none;
                text-align: center;
                line-height: 22px;
                font: 12px arial;
            }
            .div_tail{
                width:100%;
                height:30px;
                text-align: center;
                color:#999;
                font: 12px arial;
            }
 
 
            .div_menv{
                float:right;
                width:48px;
                font-size:13px;
                line-height:50px;
                text-decoration:underline;
                font-weight:bold
                
            }
            .div_gengDuo{
                
                width: 60px;
                    height: 23px;
                color: #fff;
                background: #38f;
                line-height: 24px;
                font-size: 13px;
                text-align: center;
                border-bottom: 1px solid #38f;
                margin-left: 7px;
                margin-top: 10px;
            }
            .img_baidu{
                width:250px;
                display:block;
                margin:0 auto;

            }
            .img_erWeiMa{
                width:65px;
                margin-left:47%;
            }
            .input_search{
                width:500px;
                height:30px;
                float:left;
            }
            .button_ok{
                width: 100px;
                height: 36px;
                color: #fff;
                font-size: 15px;
                letter-spacing: 1px;
                background: #3385ff;
                border:0;
                outline: medium;
                float:left;
            }
            .div_photo{
                width:20px;
                position:absolute;
                margin-left:460px;
                margin-top:9px;
            }
            .img_photo{
                width:40px;
            }
        </style>
    </head>
<script>
window.alert = function()  
{     
confirm("flag{get_your_dom3_flag!}");
}
</script>
    <body>
        <div class="div_title">
        </div>
        <div class="div_head">
            <img src="../../../src/images/baidu_resultlogo@2.png" class="img_baidu"/>
        </div>

        <div class="div_search">
            <input id="search" name="search" form="search" type="text" class="input_search" placeholder="请输入你的内容" value="" />
            <button id="ok" type="submit" value="提交" form="search" class="button_ok" onclick="xss()">B计划一下</button>
            <div  class="div_photo"><img src="../../../src/images/1.png" class="img_photo"/></div>
        </div>
        <div class="div_erWeiMa">
<!--             <img src="er.jpg" class="img_erWeiMa"/> -->
        </div>
        <div class="div_tail">
            <div id="xss"></div>
           B计划 Copyright © <a href="">C1O2A3</a>
            <a href="">明天有雨</a>
           All Rights Reserved
        </div>
    </body>

<script>
function xss() {
    var str = document.getElementById("search").value;
    var xss = str.replace(/:+/g,' ');
    document.getElementById("xss").innerHTML = "<a href='"+xss+"'>测试</a>";
}
</script>
</html>


