<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:81:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/power/poweradd.html";i:1547450140;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;s:70:"/home/wwwroot/school.wxn.fun/application/admin/view/public/footer.html";i:1547120642;}*/ ?>
<!DOCTYPE html>
<html>
<head>
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

</head>
<body>

  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">添加规则</div>
          <div class="layui-card-body" pad15>
            <form class="layui-form" method="post">
              <div class="layui-form-item">
                <label for="cate" class="layui-form-label">上级</label>
                <div class="layui-input-inline">
                    <select id="cate" name="pid" class="valid">
                        <option value="0" selected>顶级</option>
                        <?php foreach($rules as $rule): ?>
                        <option value="<?php echo $rule['id']; ?>"><?php echo $rule['_name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label" for="title">规则名称</label>
                <div class="layui-input-block">
                  <input type="text" id="title" name="name" lay-verify="required" class="layui-input">
                </div>
              </div>

              <div class="layui-form-item">
                <label class="layui-form-label" for="url">规则节点</label>
                <div class="layui-input-block">
                  <input name="url" style="width: 50%;" id="url" type="text" lay-verify="required" autocomplete="off" class="layui-input layui-input-inline">
                    <span style="line-height: 38px;color:red;"><i class="layui-icon" style="font-size:14px;margin-right: 5px;">&#xe702;</i>如：admin/user/adduser (一级节点添加“#”即可)</span>
                </div>
              </div>

              <div class="layui-form-item">
                <label for="sort" class="layui-form-label">菜单排序</label>
                <div class="layui-input-block">
                    <input type="text" id="sort" name="sort" value="0" autocomplete="off" class="layui-input layui-input-inline">
                </div>
              </div>

              <div class="layui-form-item">
                <label for="iconPicker" class="layui-form-label">字体图标</label>
                <div class="layui-input-block">
                  <input type="text" id="iconPicker" name="icon" value="layui-icon-star-fill" lay-filter="iconPicker" class="layui-input">
                </div>
              </div>

              <div class="layui-form-item">
                <label for="status" class="layui-form-label">规则状态</label>
                <div class="layui-input-block">
                  <input type="radio" name="status" value="1" title="正常" checked>
                  <input type="radio" name="status" value="0" title="停用">
                </div>
              </div>

              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="poweradd">添加规则</button>
                </div>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
 <script>
  layui.config({
    base: '/static/layuiadmin/' //静态资源所在路径
  }).extend({
    index: 'lib/index' //主入口模块
  }).use('index');
  </script>
<script type="text/javascript">
layui.config({
  base: '/static/layuiadmin/layui_exts/' //配置 layui 第三方扩展组件存放的基础目录
}).extend({
  regionSelect: 'iconPicker'
}).use(['iconPicker'],function () {
  $ = layui.jquery;
  var iconPicker = layui.iconPicker;
  iconPicker.render({
      // 选择器，推荐使用input
      elem: '#iconPicker',
      // 数据类型：fontClass/unicode，推荐使用fontClass
      type: 'fontClass',
      // 是否开启搜索：true/false
      search: true,
      // 点击回调
      click: function (data) {
          console.log(data.icon);
          $('input[name=icon]').val(data.icon);
      }
  });
  iconPicker.checkIcon('iconPicker', 'layui-icon-star-fill');
});
layui.use(['form'],function(){
  var form = layui.form;
  form.on('submit(poweradd)',function(data){
    $.ajax({
      url:"<?php echo url('power/poweradd'); ?>",
      type:'POST',
      data:{data:JSON.stringify(data.field)},
      success:function (data) {
         var message = JSON.parse(data);
         if (message.icon == 6){
             layer.msg(message.msg,{icon: message.icon,time:1000},function () {
                 window.parent.location.reload();
            });
         } else {
             layer.msg(message.msg,{icon: message.icon,time:1000});
         }
     }
    });
    return false;
  })
});
</script>
</body>
</html>
