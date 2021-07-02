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
            <dd class=" layui-this"><a href="poolpass.php">弱口令</a></dd>
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
      <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>弱口令</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
    <!-- 弱口令1 -->
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">弱口令(GET)</h2>
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
            <td>弱口令</td>
             <td>采用GET传输的登录页面</td>
            <td><form class="layui-form" action="vul/poolpass/poolpass1/flag.php" method="POST">
              <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/poolpass/poolpass1/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> 
            </td>
          </tr>
        </tbody>
       </table>
      </div>
    </div>
      <!-- 弱口令2 -->
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">弱口令(POST)</h2>
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
              <td>弱口令2</td>
              <td>采用POST传输的登录页面</td>
              <td><form class="layui-form" action="vul/poolpass/poolpass2/flag.php" method="POST">
              <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/poolpass/poolpass2/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form>
              </td>
            </tr>
          </tbody>
          </table>
          </div>
        </div>
      <!-- 弱口令3 -->
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">弱口令(MD5)</h2>
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
              <td>弱口令3</td>
              <td>采用前端MD5加密传输的登录页面</td>
              <td><form class="layui-form" action="vul/poolpass/poolpass3/flag.php" method="POST">
              <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/poolpass/poolpass3/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form>
              </td>
            </tr>
          </tbody>
          </table>
          </div>
        </div>
<!-- ======= -->
      <!-- 弱口令4 -->
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">弱口令(token验证)</h2>
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
              <td>弱口令4</td>
              <td>增加了Token的登录页面</td>
              <td><form class="layui-form" action="vul/poolpass/poolpass4/flag.php" method="POST">
              <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/poolpass/poolpass4/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form>
              </td>
            </tr>
          </tbody>
          </table>
          </div>
        </div>
<!-- ======= -->
      <!-- 弱口令5 -->
      <div class="layui-colla-item">
        <h2 class="layui-colla-title">弱口令(图形验证码)</h2>
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
              <td>弱口令5</td>
              <td>增加了图形验证码的登录页面</td>
              <td><form class="layui-form" action="vul/poolpass/poolpass5/flag.php" method="POST">
              <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/poolpass/poolpass5/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form>
              </td>
            </tr>
          </tbody>
          </table>
          </div>
        </div>
<!-- ======= -->
<!--     <br>
      <div class="layui-colla-item"> 
      <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>  其他弱口令</h2>
      </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-orange" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">tomcat弱口令</h2>
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
          <td>tomcat弱口令</td>
          <td>tomcat是一个中间件 进入管理后台后可以上传war包的网站 包括getshell</td>
          <td><form class="layui-form" action="vul/poolpass/tomcat/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="<?php $host = $_SERVER['SERVER_ADDR'];echo "http://".$host.":8080"; ?>" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">宝塔弱口令</h2>
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
          <td>宝塔弱口令</td>
          <td>宝塔是一款linux面板 权限非常大 进到去之后你甚至可以反弹shell 执行命令</td>
          <td><form class="layui-form" action="vul/poolpass/bt/flag.php" method="POST">
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

