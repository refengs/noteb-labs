<?php include 'header.php'; ?>
  <div class="layui-side layui-bg-blue">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree layui-bg-blue"  lay-filter="test">
        <li class="layui-nav-item layui-this"><a href="index.php">靶场说明</a></li>
        <li class="layui-nav-item ">
          <a class="" href="javascript:;" >基础漏洞</a>
          <dl class="layui-nav-child ">
            <dd ><a href="sqli.php" >sql注入</a></dd>
            <dd><a href="xss.php">XSS</a></dd>
            <dd><a href="csrf.php">CSRF</a></dd>
            <dd><a href="poolpass.php">弱口令</a></dd>
            <dd><a href="upload.php">文件上传</a></dd>
            <dd><a href="rce.php">命令、代码执行</a></dd>
            <dd><a href="fileinclude.php">文件包含</a></dd>
            <dd><a href="xxe.php">XML注入</a></dd>
            <dd><a href="ssrf.php">SSRF</a></dd>
            <dd><a href="logic.php">逻辑漏洞</a></dd>
            <dd><a href="editor.php">富文本编辑器</a></dd>
            <dd><a href="more.php">以及更多</a></dd>
          </dl> 
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;" >CMS漏洞</a>
          <dl class="layui-nav-child layui-bg-white">
            <dd><a href="cms.php">CMS漏洞</a></dd>
          </dl>
        </li>
        <li class="layui-nav-item">
          <a href="javascript:;" >其他漏洞</a>
          <dl class="layui-nav-child layui-bg-white">
            <dd><a href="root.php">提权</a></dd>
            <dd><a href="server.php">服务漏洞</a></dd>
<!--             <dd><a href="javascript:;">中间件</a></dd> -->
          </dl>
        </li>
        <li class="layui-nav-item"><a href="javascript:;">待更新</a></li>
        
      </ul>
    </div>
  </div>
<!-- -侧边导航栏结束  --> 

  <div class="layui-body">
    <!-- 内容主体区域 -->
    <div class="layui-collapse" lay-accordion>
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">靶场说明</h2>
        <div class="layui-colla-content layui-show">
          <p><b>本靶场</b>使用<b>Layui</b>前端模块制作,后端采用PHP语言编写</p>
          <p>本靶场包含三大模块漏洞</p>
          <p><b>(1)  CMS漏洞-非虚拟机版没有</b></p>
          <p><b>(2) 基础漏洞</b></p>
          <p>该模块包含很多基础的漏洞，适合基础不牢固的人群，比如刚入门的新人。共分为以下部分<br>
          (2.1)SQL注入漏洞<br>
          (2.2)XSS(跨站脚本)漏洞<br>
          (2.3)CSRF(跨站请求伪造)漏洞<br>
          (2.4)弱口令漏洞<br>
          (2.5)文件上传漏洞<br>
          (2.6)代码、命令执行漏洞<br>
          (2.7)文件包含漏洞<br>
          (2.8)XXE(XML外部实体注入)漏洞<br>
          (2.9)SSRF(服务器请求伪造)漏洞<br>
          (2.10)逻辑类漏洞<br>
          (2.11)富文本编辑器漏洞<br>
          (2.12)其他漏洞</p>
          <p><b>(3) 其他漏洞-非虚拟机版没有</b></p>
          <p>(3.1)提权漏洞<br>
          (3.2)服务类漏洞</p>
          <p><b>请勿用于非法用途，仅用于培养合法的，有安全责任心的网络安全人员！</b></p>
          <br>
          <p>感谢：nyt、fnndp、凉风有信、C🌠</p>
<!--         <p><b>本靶场</b>使用<b>Layui</b>前端模块制作，同时集成了很多很多漏洞。。其中包括<b>基础漏洞</b>以及<b>CMS系统</b>的漏洞。</p><p><b>本靶场</b>仅限<b>Note-B团队</b>以及团队的<b>refeng</b>、<b>fnndp</b>以及清远职业技术学院的<b>网络安全维护工作室</b>内部使用！</p><p><b>本靶场</b>请勿用于非法用途，仅用于培养合法的，有安全责任心的网络安全人员！</p><p><b>谢绝外部人员使用以及copy靶场、源码等操作！！！</b></p> -->
<!--         <img src="src/images/1.png" height="32px" width="140px" alt="">
        <img src="src/images/logo1.png" alt=""> -->
        </div>
      </div>
<!--       <div class="layui-colla-item">
        <h2 class="layui-colla-title">靶场作者</h2>
        <div class="layui-colla-content layui-show"><p><b>KenIn</b></p><p><b>凉风有信</b></p><p><b>C666666</b></p><p><b>fnndp</b></p><p><b>refeng</b></p></div>
      </div> -->
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">更新日志</h2>
        <div class="layui-colla-content layui-show">
        <p>2020年4月16日初版完成。<br>2021年7月2日修复一堆BUG，增加jsonp劫持，适配php7。 </p>
      </div>
    </div>
      </div>
  
<?php  include 'footer.php';?>