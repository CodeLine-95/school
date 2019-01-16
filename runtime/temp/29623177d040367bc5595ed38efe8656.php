<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/power/powerlist.html";i:1547449561;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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

 <style media="screen">
   .layui-table tbody tr:hover{
     background-color: #fff;
   }
 </style>
</head>
<body>
<div class="layui-fluid" class="layui-form">
  <div class="layui-card">
    <div class="layui-tab layui-tab-brief">
      <crmblok>
        <button class="layui-btn layui-btn-normal" onclick="crm_admin_show('添加规则','<?php echo url('power/poweradd'); ?>')"><i class="layui-icon">&#xe608;</i>添加规则</button>
      </crmblok>
        <table class="layui-table" style="margin:0;-moz-box-shadow:2px 2px 200px #333333; -webkit-box-shadow:2px 2px 200px #333333; box-shadow:2px 2px 200px #333333;">
          <thead>
            <tr>
              <th width="50" align="center">ID</th>
              <th width="120" align="center">规则名称</th>
              <th align="center">规则地址</th>
              <th width="60" align="center">规则状态</th>
              <th width="100" align="center">操作</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($rules as $r): ?>
            <tr>
              <td><?php echo $r['id']; ?></td>
              <td><?php echo $r['_name']; ?></td>
              <td><?php echo $r['url']; ?></td>
              <td>
                <?php switch($r['status']): case "1": ?><button class="layui-btn layui-btn-normal layui-btn-xs">正常</button><?php break; default: ?><button class="layui-btn layui-btn-danger layui-btn-xs">停用</button>
                <?php endswitch; ?>
              </td>
              <td>
                <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="crm_admin_show('编辑规则','<?php echo url('power/poweredit',array('id'=>$r['id'])); ?>')"><i class="layui-icon"></i></button>
                <button class="layui-btn layui-btn-normal layui-btn-sm" onclick="del(<?php echo $r['id']; ?>)"><i class="layui-icon"></i></button>
              </td>
            </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
        <script type="text/javascript">
          function del(id){
            layer.confirm('确认要删除吗？',function(){
              $.get("<?php echo url('power/powerdel'); ?>?id="+id,function(data){
                var message = JSON.parse(data);
                if (message.icon == 6){
                    layer.msg(message.msg,{icon: message.icon,time:1000},function () {
                        location.href=location.href
                   });
                } else {
                    layer.msg(message.msg,{icon: message.icon,time:1000});
                }
              })
            })
          }
        </script>
    </div>
    </div>
  </div>
</body>
</html>
