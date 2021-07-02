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
            <dd class=" layui-this"><a href="xss.php">XSS</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>XSS</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">反射型XSS</h2>
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
          <td>反射型XSS1</td>
          <td>基础中的基础</td>
          <td><form class="layui-form" action="vul/xss/r-xss1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>2</td>
          <td>反射型XSS2</td>
          <td>输出在JS中的</td>
          <td><form class="layui-form" action="vul/xss/r-xss2/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss2/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>3</td>
          <td>反射型XSS3</td>
          <td>过滤措施错误</td>
          <td><form class="layui-form" action="vul/xss/r-xss3/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss3/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>4</td>
          <td>反射型XSS4</td>
          <td>稍微过滤一点点 输出点由于开发人员疏忽 写错了</td>
          <td><form class="layui-form" action="vul/xss/r-xss4/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss4/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>5</td>
          <td>反射型XSS5</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss5/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss5/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>6</td>
          <td>反射型XSS6</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss6/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss6/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>7</td>
          <td>反射型XSS7</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss7/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss7/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>8</td>
          <td>反射型XSS8</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss8/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss8/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>9</td>
          <td>反射型XSS9</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss9/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss9/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>10</td>
          <td>反射型XSS10</td>
          <td>有点过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss10/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss10/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>11</td>
          <td>反射型XSS11</td>
          <td>有点过滤的HTTP头部的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss11/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss11/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>12</td>
          <td>反射型XSS12</td>
          <td>有点过滤的cookie处的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss12/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss12/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>13</td>
          <td>反射型XSS13</td>
          <td>有过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/r-xss13/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/r-xss13/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<!-- =======================反射型XSS交结束 -->
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">存储型XSS</h2>
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
          <td>存储型XSS1</td>
          <td>基础中的基础</td>
          <td><form class="layui-form" action="vul/xss/s-xss1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/s-xss1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>2</td>
          <td>存储型XSS2</td>
          <td>基础中的基础</td>
          <td><form class="layui-form" action="vul/xss/s-xss2/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/s-xss2/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>3</td>
          <td>存储型XSS3</td>
          <td>有过滤的XSS</td>
          <td><form class="layui-form" action="vul/xss/s-xss3/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/s-xss3/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>4</td>
          <td>安全的留言板</td>
          <td>使用了转义的XSS</td>
          <td><form class="layui-form" action="vul/xss/s-xss4/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/s-xss4/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-disabled" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>5</td>
          <td>存储型XSS5</td>
          <td>a标签上友情链接的XSS</td>
          <td><form class="layui-form" action="vul/xss/s-xss5/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/s-xss5/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>

<!-- ================存储型XSS结束 -->
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">DOM型XSS</h2>
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
          <td>DOM型XSS1</td>
          <td>基础中的基础</td>
          <td><form class="layui-form" action="vul/xss/d-xss1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/d-xss1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>2</td>
          <td>DOM型XSS2</td>
          <td>a标签处XSS</td>
          <td><form class="layui-form" action="vul/xss/d-xss2/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/d-xss2/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>3</td>
          <td>DOM型XSS3</td>
          <td>a标签 过滤了个符号</td>
          <td><form class="layui-form" action="vul/xss/d-xss3/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/d-xss3/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
      <tbody>
        <tr>
          <td>4</td>
          <td>DOM型XSS4</td>
          <td>过滤了一些特殊符号</td>
          <td><form class="layui-form" action="vul/xss/d-xss4/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/xss/d-xss4/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <!-- ==========================DOM型XSS结束 -->


</div>
  </div>
  
<?php  include 'footer.php';?>

 <!-- layui-show 是展开表格数据 -->
 <!-- layui-nav-itemed 是展开导航栏的列表 -->
 <!-- layui-this 是选择导航栏的某一个漏洞类型（变成绿色）用于dd标签 -->

