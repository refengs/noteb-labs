<?php include 'header.php'; ?>
<script>
//JavaScript代码区域
layui.use('element', function(){
  var element = layui.element;
  
});
function ok() {
    //弹出层提示
  layui.use('layer', function(){
  var layer = layui.layer;
  layer.alert('随意上传',{title:'tips',anim:6,icon:3,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
  }); 
}
function clean_upload_file(){
  $.ajax({  
    type: 'get',  
    url: "../del.php",  
  }).success(function(data) {
        //弹出层提示
      layui.use('layer', function(){
      var layer = layui.layer;
      layer.msg(data,{anim:1,icon:1,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
      }); 
  }).error(function() {
        //弹出层提示
      layui.use('layer', function(){
      var layer = layui.layer;
      layer.msg('删除失败',{anim:1,icon:2,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
      }); 
  }); 
}
function msg() {
    //弹出层提示
  layui.use('layer', function(){
  var layer = layui.layer;
  layer.alert('<?php echo $msg; ?>',{title:'tips',anim:6,icon:3,time:10000,closeBtn:1,btn: ['我知道了'],btnAlign:'c'});
  }); 
}
</script>
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
            <dd class=" layui-this"><a href="upload.php">文件上传</a></dd>
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
    <h2 class="div-colla-title"><i class="layui-icon">&#xe65b;</i>文件上传</h2>
    </div>
      <div class="layui-progress">
        <div class="layui-progress-bar layui-bg-blue" lay-percent="100%"></div>
      </div>
  <div class="layui-colla-item">
    <h2 class="layui-colla-title">任意文件上传</h2>
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
          <td>任意文件上传</td>
          <td>任意文件上传</td>
          <td><form class="layui-form" action="vul/upload/upload1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload1/index.php" class="layui-btn" target="_blank">打开靶场</a>
            <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">JS限制上传</h2>
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
              <td>前端限制</td>
              <td>前端JS校验文件上传后缀名</td>
              <td><form class="layui-form" action="vul/upload/upload2/flag.php" method="POST">
            <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload2/index.php" class="layui-btn" target="_blank">打开靶场</a>
                <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">绕过上传1</h2>
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
            <td>绕过上传1</td>
            <td>大小写绕过</td>
            <td><form class="layui-form" action="vul/upload/upload3/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload3/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">绕过上传2</h2>
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
            <td>绕过上传2</td>
            <td>双写绕过</td>
            <td><form class="layui-form" action="vul/upload/upload4/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload4/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">绕过上传3</h2>
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
            <td>绕过上传3</td>
            <td>cont type绕过</td>
            <td><form class="layui-form" action="vul/upload/upload5/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload5/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">绕过上传4</h2>
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
            <td>绕过上传4</td>
            <td>文件头绕过</td>
            <td><form class="layui-form" action="vul/upload/upload6/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload6/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">绕过上传5</h2>
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
            <td>绕过上传5</td>
            <td>特殊后缀绕过</td>
            <td><form class="layui-form" action="vul/upload/upload7/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload7/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>  
<div class="layui-colla-item">
      <h2 class="layui-colla-title">文件上传6</h2>
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
            <td>文件上传6</td>
            <td>爆破文件名</td>
            <td><form class="layui-form" action="vul/upload/upload8/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload8/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>  
<div class="layui-colla-item">
      <h2 class="layui-colla-title">文件上传7</h2>
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
            <td>文件上传7</td>
            <td>条件竞争绕过</td>
            <td><form class="layui-form" action="vul/upload/upload9/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload9/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<div class="layui-colla-item">
      <h2 class="layui-colla-title">文件上传8</h2>
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
            <td>文件上传8</td>
            <td>三种限制条件</td>
            <td><form class="layui-form" action="vul/upload/upload10/flag.php" method="POST">
          <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload10/index.php" class="layui-btn" target="_blank">打开靶场</a>
              <button class="layui-btn layui-btn-warm" lay-submit lay-filter="formDemo">提交FLAG</button>   </form> </td>
        </tr>
      </tbody>
    </table>
    </div>
  </div>
<!--     <div class="layui-colla-item">
      <h2 class="layui-colla-title">搜索型注入</h2>
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
          <td>任意文件上传</td>
          <td>随便你上传啥，我都认</td>
          <td><form class="layui-form" action="vul/upload/upload1/flag.php" method="POST">
        <input type="text" name="flag" required lay-verify="required" placeholder="请输flag" autocomplete="off" class="layui-input"><a href="vul/upload/upload1/index.php" class="layui-btn" target="_blank">打开靶场</a>
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

