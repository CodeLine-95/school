<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:78:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/index/index.html";i:1547451736;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;s:70:"/home/wwwroot/school.wxn.fun/application/admin/view/public/footer.html";i:1547120642;}*/ ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $systems['title']; ?>后台管理系统</title>
  <meta name="renderer" content="webkit">
  <link rel="icon" href="<?php echo $systems['icon']; ?>" type="image/x-icon"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=0">
  <link rel="stylesheet" href="/static/layuiadmin/layui/css/layui.css" media="all">
  <link rel="stylesheet" href="/static/layuiadmin/style/admin.css" media="all">
  <script src="/static/layuiadmin/layui/layui.js"></script>
  <script src="/static/home/js/jquery.min.js"></script>
  <script src="/static/home/js/admin.js"></script>
  <script src="/static/home/js/layui-xtree.js"></script>
  <script type="text/javascript" charset="utf-8" src="/static/php/ueditor.config.js"></script>
  <script type="text/javascript" charset="utf-8" src="/static/php/ueditor.all.js"> </script>
  <style>
  .page{
    margin-top: 20px;
    text-align: center;

}
.page a{
    display: inline-block;
    background: #fff url() 0 0 no-repeat;
    color: #888;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #E2E2E2;

}
.page span{
    display: inline-block;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #E2E2E2;
}
.page span.current{
    display: inline-block;
    background: #64e410 url() 0 0 no-repeat;
    color: #fff;
    padding: 10px;
    min-width: 15px;
    border: 1px solid #64e410;
}
.page .pagination li{
    display: inline-block;
    margin-right: 5px;
    text-align: center;
}
.page .pagination li.active span{
    background: #64e410 url() 0 0 no-repeat;
    color: #fff;
    border: 1px solid #64e410;

}
.upload-icon-img{
    width:120px;
}
.upload-pre-item{
    position: relative;
}
.upload-pre-item .img{
    margin-top: 5px;
    width:150px;
    height:100px;
}
.upload-pre-item i {
    position: absolute;
    cursor: pointer;
    top: 5px;
    background: #2F4056;
    padding: 2px;
    line-height: 15px;
    text-align: center;
    color: #fff;
    margin-left: 1px;
    /* float: left; */
    filter: alpha(opacity=80);
    -moz-opacity: .8;
    -khtml-opacity: .8;
    opacity: .8;
    transition: 1s;
}
.upload-pre-item i:hover{transform:rotate(360deg);}
.upload-pre-item,.upload-icon-img{
    width:120px;
    float: left;
    margin-left: 55px;
}
</style>
</head>

<body class="layui-layout-body">
  
  <div id="LAY_app">
    <div class="layui-layout layui-layout-admin">
      <div class="layui-header">
        <!-- 头部区域 -->
        <ul class="layui-nav layui-layout-left">
          <li class="layui-nav-item layadmin-flexible" lay-unselect>
            <a href="javascript:;" layadmin-event="flexible" title="侧边伸缩">
              <i class="layui-icon layui-icon-shrink-right" id="LAY_app_flexible"></i>
            </a>
          </li>
          <li class="layui-nav-item layui-hide-xs" lay-unselect>
            <a href="/index.html" target="_blank" title="前台">
              前台
            </a>
          </li>
          <li class="layui-nav-item" lay-unselect>
            <a href="javascript:;" layadmin-event="refresh" title="刷新">
              <i class="layui-icon layui-icon-refresh"></i>
              <cite>刷新</cite>
            </a>
          </li>
        </ul>
        <ul class="layui-nav layui-layout-right" lay-filter="layadmin-layout-right">
          
          <li class="layui-nav-item">
            <a href="">
              <i class="layui-icon layui-icon-tabs">&#xe62a;</i>
              <cite>待办<span class="layui-badge layui-bg-blue">9</span></cite>
            </a>
          </li>
         <!--  <li class="layui-nav-item layui-hide-xs" lay-unselect>
            <a href="javascript:;" layadmin-event="theme">
              <i class="layui-icon layui-icon-theme"></i>
            </a>
          </li> -->
          <li class="layui-nav-item" lay-unselect>
            <a href="javascript:;">
              <cite><?php echo $publics['username']; ?></cite>
            </a>
            <dl class="layui-nav-child">
              <dd><a lay-href="<?php echo url('index/member'); ?>">修改信息</a></dd>
              <dd onclick="pwdedit('<?php echo url('index/password'); ?>')"><a href="javascript:;">修改密码</a></dd>
              <dd id="delcache"><a href="javascript:;">清除缓存</a></dd>
              <hr>
              <dd style="text-align: center;"  id="logout"><a href="javascript:;">退出</a></dd>
            </dl>
          </li>
          
          <li class="layui-nav-item layui-hide-xs" lay-unselect>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </li>
          <li class="layui-nav-item layui-show-xs-inline-block layui-hide-sm" lay-unselect>
           
          </li>
        </ul>
      </div>

      
      <!-- 侧边菜单 -->
      <div class="layui-side layui-side-menu">
        <div class="layui-side-scroll">
          <div class="layui-logo" lay-href="<?php echo url('index/console'); ?>">
            <span><?php echo $systems['title']; ?></span>
          </div>
          
          <ul class="layui-nav layui-nav-tree" lay-shrink="all" id="LAY-system-side-menu" lay-filter="layadmin-system-side-menu">
            <li data-name="home" class="layui-nav-item">
              <a href="javascript:;" lay-tips="主页" lay-direction="2">
                <i class="layui-icon layui-icon-home"></i>
                <cite>主页</cite>
              </a>
              <dl class="layui-nav-child">
                <dd data-name="console" class="layui-this">
                  <a lay-href="<?php echo url('index/console'); ?>">控制台</a>
                </dd>
              </dl>
            </li>

            

            <?php foreach($menu as $cm): ?>
            <li class="layui-nav-item">
              <?php if(!isset($cm['url'])): ?>
              <a href="javascript:;" lay-tips="<?php echo $cm['name']; ?>" lay-direction="2">
                <i class="layui-icon <?php echo $cm['icon']; ?>"></i>
                <cite><?php echo $cm['name']; ?></cite>
              </a>
              <?php else: ?>
              <a lay-href="<?php echo $cm['url']; ?>" lay-tips="<?php echo $cm['name']; ?>" lay-direction="2">
                <i class="layui-icon <?php echo $cm['icon']; ?>"></i>
                <cite><?php echo $cm['name']; ?></cite>
              </a>
              <?php endif; if(!(empty($cm['child']) || (($cm['child'] instanceof \think\Collection || $cm['child'] instanceof \think\Paginator ) && $cm['child']->isEmpty()))): ?>
              <dl class="layui-nav-child">
                <?php foreach($cm['child'] as $cd): ?>
                  <dd><a lay-href="<?php echo $cd['url']; ?>">
                    <i class="layui-icon <?php echo $cd['icon']; ?>"></i>
                    <cite><?php echo $cd['name']; ?></cite>
                  </a>
                </dd>
                <?php endforeach; ?>
              </dl>
              <?php endif; ?>
            </li>
            <?php endforeach; ?>


         
            <li data-name="get" class="layui-nav-item">
              <a href="javascript:;" onclick="layer.tips('第二阶段开始开发', this);" lay-tips="加盟商管理系统" lay-direction="2">
                <i class="layui-icon layui-icon-auz"></i>
                <cite>加盟商管理系统</cite>
              </a>
            </li>
            <li data-name="get" class="layui-nav-item">
              <a href="javascript:;" onclick="layer.tips('第二阶段开始开发', this);" lay-tips="自媒体平台" lay-direction="2">
                <i class="layui-icon layui-icon-auz"></i>
                <cite>自媒体平台</cite>
              </a>
            </li>
            <li data-name="get" class="layui-nav-item">
              <a href="javascript:;" onclick="layer.tips('第二阶段开始开发', this);" lay-tips="OA管理" lay-direction="2">
                <i class="layui-icon layui-icon-auz"></i>
                <cite>OA管理</cite>
              </a>
            </li>
            <li data-name="get" class="layui-nav-item">
              <a href="javascript:;" onclick="layer.tips('第三阶段开始开发', this);" lay-tips="教育舆情监测" lay-direction="2">
                <i class="layui-icon layui-icon-auz"></i>
                <cite>教育舆情监测</cite>
              </a>
            </li>
          </ul>
        </div>
      </div>

      <!-- 页面标签 -->
      <div class="layadmin-pagetabs" id="LAY_app_tabs">
        <div class="layui-icon layadmin-tabs-control layui-icon-prev" layadmin-event="leftPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-next" layadmin-event="rightPage"></div>
        <div class="layui-icon layadmin-tabs-control layui-icon-down">
          <ul class="layui-nav layadmin-tabs-select" lay-filter="layadmin-pagetabs-nav">
            <li class="layui-nav-item" lay-unselect>
              <a href="javascript:;"></a>
              <dl class="layui-nav-child layui-anim-fadein">
                <dd layadmin-event="closeThisTabs"><a href="javascript:;">关闭当前标签页</a></dd>
                <dd layadmin-event="closeOtherTabs"><a href="javascript:;">关闭其它标签页</a></dd>
                <dd layadmin-event="closeAllTabs"><a href="javascript:;">关闭全部标签页</a></dd>
              </dl>
            </li>
          </ul>
        </div>
        <div class="layui-tab" lay-unauto lay-allowClose="true" lay-filter="layadmin-layout-tabs">
          <ul class="layui-tab-title" id="LAY_app_tabsheader">
            <li lay-id="<?php echo url('index/console'); ?>" class="layui-this"><i class="layui-icon layui-icon-home"></i></li>
          </ul>
        </div>
      </div>
      <!-- 主体内容 -->
      <div class="layui-body" id="LAY_app_body">
        <div class="layadmin-tabsbody-item layui-show">
          <iframe src="<?php echo url('index/console'); ?>" frameborder="0" class="layadmin-iframe"></iframe>
        </div>
      </div>
      <!-- 辅助元素，一般用于移动设备下遮罩 -->
      <div class="layadmin-body-shade" layadmin-event="shade"></div>
    </div>
  </div>
   <script>
  layui.config({
    base: '/static/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use('index');
  </script>
  <script>
    $(function () {
            $('#logout').click(function () {
              layer.confirm("您确定选择退出吗？",function(){
                $.ajax({
                    type:'post',
                    url:'<?php echo url("index/logout"); ?>',
                    data: {},
                    success:function (data) {
                        var status = JSON.parse(data);
                        layer.msg(status.msg,{icon: status.icon,time:1000},function(){
                            location.href='<?php echo url("login/login"); ?>';
                        });
                    }
                });
              });
            });
          $("#delcache").click(function(){
            layer.confirm("为了提高用户体验，请您经常清除缓存",function(){
              $.ajax({
                    
                    url:"<?php echo url('index/delruntime'); ?>",
                    data: {},
                    type:'get',
                    success:function (data) {
                       layer.msg('删除缓存成功',{icon:6,time: 1000});
                    }
                });
            });
          });
        });
        function pwdedit(url){
            layer.prompt({title: '请输入新密码：', formType: 1}, function(pass, index){
              $.ajax({
                  url:url,
                  data:{user_pwd_news:pass},
                  type:'post',
                  success:function(data){
                    var status = JSON.parse(data);
                    if (status.icon == 6){
                        layer.msg(status.msg,{icon: status.icon,time:1000},function () {
                          window.location.reload();
                       });
                    } else {
                        layer.msg(status.msg,{icon: status.icon,time:1000});
                    }
                  }
                });
            });
          }
                 // 修改密码弹框
         function pwdedit(url){
          layer.prompt({title: '请输入新密码：', formType: 1}, function(pass, index){
            $.ajax({
                url:url,
                data:{pass:pass},
                type:'post',
                success:function(data){
                  var status = JSON.parse(data);
                  if (status.icon == 6){
                      layer.msg(status.msg,{icon: status.icon,time:1000},function () {
                        window.location.reload();
                     });
                  } else {
                      layer.msg(status.msg,{icon: status.icon,time:1000});
                  }
                }
              });
          });
        }
  </script>
</body>
</html>


