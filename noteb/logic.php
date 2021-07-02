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
            <dd><a href="rce.php">命令、代码执行</a></dd>
            <dd><a href="fileinclude.php">文件包含</a></dd>
            <dd><a href="xxe.php">XML注入</a></dd>
            <dd><a href="ssrf.php">SSRF</a></dd>
            <dd  class=" layui-this"><a href="logic.php">逻辑漏洞</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>逻辑漏洞</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">越权漏洞</h2>
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
          <td>越权访问</td>
          <td>以ID参数作为标识，结果未做好权限控制</td>
          <td><a href="vul/logic/logic1/index.php" class="layui-btn" target="_blank">打开靶场</a>
  </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">未授权访问</h2>
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
          <td>未授权访问</td>
          <td>不用登陆就可以访问</td>
          <td><a href="vul/logic/logic1/home.php" class="layui-btn" target="_blank">打开靶场</a>
  </form> </td>

    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">任意用户注册</h2>
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
          <td>任意用户注册</td>
          <td>批量任意用户注册</td>
          <td><a href="vul/logic/logic2/index.php" class="layui-btn" target="_blank">打开靶场</a>
  </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>


  <div class="layui-colla-item">
    <h2 class="layui-colla-title">密码找回漏洞</h2>
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
          <td>密码找回漏洞</td>
          <td>业务逻辑乱序</td>
          <td><a href="vul/logic/logic3/index.php" class="layui-btn" target="_blank">打开靶场</a>
  </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
    <div class="layui-colla-item">
    <h2 class="layui-colla-title">任意金额购买漏洞</h2>
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
          <td>任意金额购买漏洞</td>
          <td>后台未进行校验，导致可以任意金额购买</td>
          <td><a href="vul/logic/logic4/index.php" class="layui-btn" target="_blank">打开靶场</a>
  </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<!-- =======================结束 -->


</div>
  </div>
  
<?php  include 'footer.php';?>

 <!-- layui-show 是展开表格数据 -->
 <!-- layui-nav-itemed 是展开导航栏的列表 -->
 <!-- layui-this 是选择导航栏的某一个漏洞类型（变成绿色）用于dd标签 -->

