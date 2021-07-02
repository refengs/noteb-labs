<?php include 'header.php'; ?>
  <div class="layui-side layui-bg-blue">
    <div class="layui-side-scroll">
      <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
      <ul class="layui-nav layui-nav-tree layui-bg-blue"  lay-filter="test">
        <li class="layui-nav-item"><a href="index.php">靶场说明</a></li>
        <li class="layui-nav-item layui-nav-itemed">
          <a class="" href="javascript:;" >基础靶场</a>
          <dl class="layui-nav-child ">
            <dd class=" layui-this"><a href="sqli.php" >sql注入</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>  GET提交方式</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">数字型注入</h2>
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
          <td>数字型注入</td>
          <td>简单的注入</td>
          <td><form class="layui-form" action="vul/sqli/sqli1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">字符型注入</h2>
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
              <td>字符型注入</td>
              <td>简单的注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli2/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli2/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">宽字节注入</h2>
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
            <td>宽字节注入</td>
            <td>GBK编码引起的注入</td>
            <td><form class="layui-form" action="vul/sqli/sqli3/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli3/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">布尔盲注</h2>
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
            <td>布尔盲注</td>
            <td>没有回显的注入</td>
            <td><form class="layui-form" action="vul/sqli/sqli4/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli4/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">时间盲注</h2>
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
            <td>时间盲注</td>
            <td>根据响应页面的延迟判断是否存在注入</td>
            <td><form class="layui-form" action="vul/sqli/sqli5/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli5/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">嵌套子查询注入</h2>
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
            <td>嵌套子查询注入</td>
            <td>嵌套子查询</td>
            <td><form class="layui-form" action="vul/sqli/sqli6/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli6/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">简单过滤的注入</h2>
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
            <td>简单过滤的注入</td>
            <td>有点过滤的注入</td>
            <td><form class="layui-form" action="vul/sqli/sqli7/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli7/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">多过滤一点的注入</h2>
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
            <td>多过滤一点的注入</td>
            <td>过滤了多一点点</td>
            <td><form class="layui-form" action="vul/sqli/sqli8/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli8/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">有点安全的注入</h2>
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
            <td>暴力且有点安全的注入</td>
            <td>代码层面强制转换类型</td>
            <td><form class="layui-form" action="vul/sqli/sqli9/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli9/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-disabled" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
      <br>
      <div class="layui-colla-item"> 
      <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>  POST提交方式</h2>
      </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-orange" lay-percent="100%"></div>
      </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">简单的POST注入</h2>
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
              <td>简单的POST注入</td>
              <td>简单的表单注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli10/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli10/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
            <tr>
              <td>2</td>
              <td>XX型注入</td>
              <td>凡是注入 需先闭合</td>
              <td><form class="layui-form" action="vul/sqli/sqli11/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli11/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
          <tbody>
            <tr>
              <td>3</td>
              <td>万能密码</td>
              <td>使用万能密码登陆</td>
              <td><form class="layui-form" action="vul/sqli/sqli10.5/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli10.5/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">子嵌套查询注入</h2>
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
              <td>子嵌套查询注入（双查询注入）</td>
              <td>嵌套子查询</td>
              <td><form class="layui-form" action="vul/sqli/sqli12/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli12/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">布尔盲注</h2>
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
              <td>布尔盲注</td>
              <td>没有回显的注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli13/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli13/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">时间盲注</h2>
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
              <td>时间盲注</td>
              <td>时间盲注</td>
              <td><form class="layui-form" action="vul/sqli/sqli14/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli14/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">有过滤的注入</h2>
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
              <td>有过滤的注入</td>
              <td>简单的过滤</td>
              <td><form class="layui-form" action="vul/sqli/sqli15/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli15/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">有点安全的注入</h2>
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
              <td>有点安全的注入</td>
              <td>过滤多了一些关键词</td>
              <td><form class="layui-form" action="vul/sqli/sqli16/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli16/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-disabled" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

<!-- 。。。。。。POST注入部分结束 -->
      <br>
      <div class="layui-colla-item"> 
      <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>  其他注入</h2>
      </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-red" lay-percent="100%"></div>
      </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">头部注入||update注入</h2>
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
              <td>头部注入||update注入</td>
              <td>头部处的update注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli17/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli17/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">insert注入</h2>
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
              <td>insert注入</td>
              <td>insert（方式）注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli18/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli18/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">delect注入</h2>
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
              <td>delect注入</td>
              <td>delect（方式）注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli19/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli19/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">二次注入</h2>
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
              <td>二次注入</td>
              <td>二次注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli20/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli20/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="layui-colla-item">
      <h2 class="layui-colla-title">cookie注入</h2>
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
              <td>cookie注入</td>
              <td>cookie处的注入</td>
              <td><form class="layui-form" action="vul/sqli/sqli21/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/sqli/sqli21/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
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

