<?php 
session_start();
if (empty($_SESSION["NotebUser"])) {
  header("Location:../../../login.php");
}
 ?>
<?php 
//url输入?s则显示源码
if(isset($_GET['s'])){
    show_source(__FILE__);
    exit;
}
 ?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="renderer" content="webkit" />
    
    <title>在线Ping检测工具</title>
    <meta name="keywords" content="在线Ping,Ping,Ping检测,Ping检测工具" />
    <meta name="description" content="在线Ping检测工具" />

    <link href="../static/css/bootstrap3.5min.css" rel="stylesheet" type="text/css" />
    <link href="../static/css/mainmin.css" rel="stylesheet" type="text/css" />

</head>
<body>
    
    
<div class="navbar navbar-default navbar-static-top navbar-fixed-top">
    <div class="jz container">
        <div class="navbar-header">
            <a class="navbar-brand" href="" id="logo">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
            <a class="navbar-brand" href="">B计划平台</a>
        </div>

    </div>
</div>

    <div class="container">
        <div class="row">
            <div class="col-md-12 col10main">
                
    <div class="accordion" id="accordion2">
        <div class="accordion-group">         
<br><br><br><br><br>

            <div class="alert alert-success alert-dismissible" role="alert">
                在线Ping检测工具（实现在线Ping网址或者IP地址,获取网址URL真实IP地址）
            </div>
            
            <div class="panel">
                <form id="form1" class="form-horizontal" action="" method="post">
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        网址/IP地址：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="txt_url" name="url" type="text" placeholder="例如：www.baidu.com"
                            value="" />
                    </div>
                </div>
<!--                 <div class="form-group">
                    <label class="col-sm-2 control-label">
                        超时时间：
                    </label>
                    <div class="col-sm-10">
                        <input class="form-control" id="times" type="text" value="2000ms" style="width: 30%;"
                            disabled="" />
                    </div>
                </div> -->
                <div class="form-group">
                    <label class="col-sm-2 control-label">
                        Ping操作：
                    </label>
                    <div class="col-sm-10">
                        <input type="submit" id="startbtn" onclick="getstartbtn();" value="开始Ping" class="btn btn-success">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        
                    </div>
                </div>
                </form>
            </div>
        </div>

<div class="col-sm-12">
<?php
$result = ""; 
if (!empty($_POST)) {
    echo "<pre>";
    $url = $_POST['url'];
    echo $url;
    if(stristr(php_uname('s'), 'windows')){
    //         var_dump(php_uname('s'));
            $result.=shell_exec('ping '.$url);//直接将变量拼接进来，没做处理
        }else {
            $result.=shell_exec('ping -c 4 '.$url);
        } 
}
print_r($result);
 ?>
</pre>
                        
</div>
    
    
 <div class="accordion-group">
 </div>
 
    
    </div>

            </div>
        </div>
        
        
<div class="row" style="margin-top: 10px;">
    <div class="col-md-12 col10main" id="footermaps">
        <div class="widget">
            <h4 class="title">
                </h4>
            <div class="typetags">
                <div class="footermap">
                    <ul class="list-inline">
                        <li><b>Hi!</b>：<a href="" class="hottag">Are You Ready?</a></li><li>
                            </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

        
    </div>
    
    
    
<div class="copyright" id="FootLinkStr">
    <div class="container">
        
        <div class="row">
            <div class="col-sm-12">
                <span>Copyright © C1O2A3 <a href="/">B计划平台</a></span> | <span><a href="http://www.beian.miit.gov.cn"
                    target="_blank"></a></span> | <span>
                    </span>
            </div>
        </div>
    </div>
</div>

</body>
</html>
