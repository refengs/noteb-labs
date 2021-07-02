<?php include 'header.php'; ?>
  <div class="layui-side layui-bg-blue">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree layui-bg-blue"  lay-filter="test">
        <li class="layui-nav-item"><a href="index.php">靶场说明</a></li>
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;" >基础靶场</a>
          <dl class="layui-nav-child ">
            <dd><a href="sqli.php" >sql注入</a></dd>
            <dd><a href="xss.php">XSS</a></dd>
            <dd><a href="csrf.php">CSRF</a></dd>
            <dd><a href="poolpass.php">弱口令</a></dd>
            <dd><a href="upload.php">文件上传</a></dd>
            <dd class=" layui-this"><a href="rec.php">命令、代码执行</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>命令执行</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
<!--   <div class="layui-colla-item">
    <h2 class="layui-colla-title">S2系列</h2>
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
          <td>s2命令执行系列</td>
          <td>Struts2框架系列rce漏洞</td>
          <td><form class="layui-form" action="vul/rec/s2/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php #$host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":8080/struts2/showcase.action"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div> -->

  <div class="layui-colla-item">
    <h2 class="layui-colla-title">命令执行1</h2>
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
          <td>基础的命令执行</td>
          <td>命令执行</td>
          <td><!-- <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">命令执行2</h2>
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
          <td>有点过滤的命令执行</td>
          <td>命令执行</td>
          <td><!-- <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce2/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">命令执行3</h2>
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
          <td>有点过滤的命令执行2</td>
          <td>有点过滤的命令执行2</td>
          <td><!-- <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce3/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>

  <div class="layui-colla-item">
    <h2 class="layui-colla-title">命令执行4</h2>
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
          <td>安全的命令执行</td>
          <td>安全的命令执行</td>
          <td><!-- <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce4/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <br>
      <div class="layui-colla-item"> 
      <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>  代码执行</h2>
      </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-orange" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">代码执行1</h2>
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
          <td>代码执行</td>
          <td>eval代码执行</td>
          <td><!--  <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce5/index.php?get=echo 'test';" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">代码执行2</h2>
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
          <td>代码执行</td>
          <td>动态函数代码执行</td>
          <td><!--  <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce6/index.php?get=" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">代码执行3</h2>
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
          <td>代码执行</td>
          <td>动态变量代码执行</td>
          <td><!--  <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce7/index.php?a=echo&b='test'" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">代码执行4</h2>
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
          <td>代码执行</td>
          <td>replacement参数代码执行</td>
          <td><!--  <form class="layui-form" action="vul/rec/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"> --><a href="vul/rce/rce8/index.php?get=test" class="layui-btn" target="_blank">打开靶场</a>
            <!-- <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   -->   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>

</div>
  </div>
  
<?php  include 'footer.php';?>

 <!-- layui-show 是展开表格数据 -->
 <!-- layui-nav-itemed 是展开导航栏的列表 -->
 <!-- layui-this 是选择导航栏的某一个漏洞类型（变成绿色）用于dd标签 -->

