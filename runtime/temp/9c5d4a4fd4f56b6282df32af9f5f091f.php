<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/power/edit.html";i:1547449561;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;s:70:"/home/wwwroot/school.wxn.fun/application/admin/view/public/footer.html";i:1547120642;}*/ ?>
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

  <script type="text/javascript" src="__TROOT__/admin/js/layui-xtree.js"></script>
</head>
<body>
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-body" pad15>
            <form class="layui-form" method="post">
              <input type="hidden" name="id" value="<?php echo $field['id']; ?>">
              <div class="layui-form-item">
                <label class="layui-form-label" for="title">角色名称</label>
                <div class="layui-input-block">
                  <input type="text" id="title" name="title" value="<?php echo $field['title']; ?>" lay-verify="required" class="layui-input">
                </div>
              </div>

              <div class="layui-form-item">
                <label class="layui-form-label" for="remark">权限说明</label>
                <div class="layui-input-block">
                  <input type="text" id="remark" name="remark" value="<?php echo $field['remark']; ?>" lay-verify="required" class="layui-input">
                </div>
              </div>

              <div class="layui-form-item">
                <label for="rules" class="layui-form-label">权限分配</label>
                <div class="layui-input-block">
                    <div id="layui-xtree-checkbox" id="rules"></div>
                </div>
              </div>

              <div class="layui-form-item">
                <label for="status" class="layui-form-label">角色状态</label>
                <div class="layui-input-block">
                  <input type="radio" name="status" value="1" title="正常" <?php if($field['status'] == 1): ?>checked<?php endif; ?>>
                  <input type="radio" name="status" value="0" title="停用" <?php if($field['status'] == 0): ?>checked<?php endif; ?>>
                </div>
              </div>

              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn layui-btn-normal" lay-submit lay-filter="edit">编辑角色</button>
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
    /*获取权限结构树*/
    var json = '';
    var id = $('input[name=id]').val();
    $.ajax({
        async: false,
        url:"<?php echo url('power/tree'); ?>",
        type:'post',
        data:{id:id},
        success:function (data) {
            json = data;
        }
    });
    console.log(json)
    layui.use(['form','layer'], function(){
        $ = layui.jquery;
        var form = layui.form,layer = layui.layer;
        /*实例化权限树*/
        var xtree = new layuiXtree({
            elem: 'layui-xtree-checkbox',
            form: form,
            data: json,
            ckall:false,
            isopen: true,
            color: {
                open: "#1E9FFF", close: "#1E9FFF", end: "#1E9FFF"
            },
            icon: { //图标样式 （选填）
                open: "&#xe7a0;",
                close: "&#xe622;",
                end: "&#xe621;"
            }
        });
        //监听提交
        form.on('submit(edit)', function(data){
          var oCks = xtree.GetChecked();
          var rule = [];
          for(var i = 0; i < oCks.length; i++) {
              var str = oCks[i].value;
              var strArr = str.split('-');
              var lastStr = strArr.join(',');
              rule.push(lastStr);
          }
          var rules = rule.join(',').split(',');
          $.ajax({
              url:"<?php echo url('power/edit'); ?>",
              type:"POST",
              data: {
                  data:JSON.stringify(data.field),
                  rules:JSON.stringify(rules)
              },
              success:function (data) {
                  var message = JSON.parse(data);
                  if (message.icon == 6){
                      layer.msg(message.msg,{icon: message.icon,time:1000},function () {
                          location.href=location.href;
                      });
                  } else {
                      layer.msg(message.msg,{icon: message.icon,time:1000});
                  }
              }
          });
          return false;
      });
    });
</script>
</body>
</html>
