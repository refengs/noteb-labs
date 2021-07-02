<?php include 'header.php'; ?>
  <div class="layui-side layui-bg-blue">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree layui-bg-blue"  lay-filter="test">
        <li class="layui-nav-item"><a href="index.php">靶场说明</a></li>
        <li class="layui-nav-item">
          <a class="" href="javascript:;" >基础靶场</a>
          <dl class="layui-nav-child ">
            <dd><a href="sqli.php" >sql注入</a></dd>
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
        <li class="layui-nav-item layui-nav-itemed">
          <a href="javascript:;" >其他漏洞</a>
          <dl class="layui-nav-child layui-bg-white">
            <dd><a href="root.php">提权</a></dd>
            <dd class=" layui-this"><a href="server.php">服务漏洞</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>敬请期待虚拟机版</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
<!--   <div class="layui-colla-item">
    <h2 class="layui-colla-title">redis未授权</h2>
    <div class="layui-colla-content">
    <table class="layui-table">
      <colgroup>
        <col width="5%">
        <col width="20%">
        <col width="40%">
        <col width="35%">
      </colgroup>
      <tbody>
        <tr>
          <td>1</td>
          <td>我只能告诉你端口号 剩下的交给你了</td>
          <td>端口号是6380。。。。利用redis可以干很多事</td>
          <td><form class="layui-form" action="vul/server/redis/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php $host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":6380"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">SSH弱口令</h2>
    <div class="layui-colla-content">
    <table class="layui-table">
      <colgroup>
        <col width="5%">
        <col width="20%">
        <col width="40%">
        <col width="35%">
      </colgroup>
      <tbody>
        <tr>
          <td>1</td>
          <td>SSH弱口令 账号是noteb 这是我送你的提示</td>
          <td>干就是了，要不不爆破这个，爆破root的？？？</td>
          <td><form class="layui-form" action="vul/server/ssh/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php $host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":22"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">CVE-2017-12615</h2>
    <div class="layui-colla-content">
    <table class="layui-table">
      <colgroup>
        <col width="5%">
        <col width="20%">
        <col width="40%">
        <col width="35%">
      </colgroup>
      <tbody>
        <tr>
          <td>1</td>
          <td>CVE-2017-12615</td>
          <td>tomcat的洞。。。直接put上传木马。</td>
          <td><form class="layui-form" action="vul/server/tomcat_put/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php $host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":8080"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">宝塔getshell</h2>
    <div class="layui-colla-content">
    <table class="layui-table">
      <colgroup>
        <col width="5%">
        <col width="20%">
        <col width="40%">
        <col width="35%">
      </colgroup>
      <tbody>
        <tr>
          <td>1</td>
          <td>宝塔GETSHELL-拿下 反弹 提权</td>
          <td>宝塔是个很好的面板。。。自带shell。。。</td>
          <td><form class="layui-form" action="vul/server/bt/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php $host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":8888"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div> -->
<!--     <div class="layui-colla-item">
      <h2 class="layui-colla-title">搜索型注入</h2>
      <div class="layui-colla-content">
        <table class="layui-table">
          <colgroup>
            <col width="50">
            <col width="40%">
            <col width="50%">
          </colgroup>
          <tbody>
            <tr>
              <td>1</td>
              <td>搜索型注入</td>
              <td><form class="layui-form" action="" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli22/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div> -->

</div>
  </div>
  
<?php  include 'footer.php';?>

 <!-- layui-show 是展开表格数据 -->
 <!-- layui-nav-itemed 是展开导航栏的列表 -->
 <!-- layui-this 是选择导航栏的某一个漏洞类型（变成绿色）用于dd标签 -->

