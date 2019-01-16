<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:79:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/index/course.html";i:1547546223;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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

<script type="text/javascript" src="/static/home/js/cropper.min.js"></script>
<link href="/static/home/css/cropper.min.css" rel="stylesheet" type="text/css">
<link href="/static/home/css/ImgCropping.css" rel="stylesheet" type="text/css">
<body>
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">大事件列表</div>
          <div class="layui-card-body" pad15>
              <button class="layui-btn layui-btn-sm" onclick="crm_admin_show('添加大事件','<?php echo url('index/addcourse'); ?>')"><i class="layui-icon">&#xe608;</i>添加大事件</button>
            <div class="layui-card">
          <div class="layui-card-body">

            <ul class="layui-timeline">
              <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
              <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis"></i>
                <div class="layui-timeline-content layui-text">
                  <h3 class="layui-timeline-title"><?php echo date('Y年m月d日',$vv['time']); ?></h3>
                  <blockquote class="layui-elem-quote"><?php echo $vv['name']; ?>
                    <span style="margin-left:20%;">
                        <button class="layui-btn layui-btn-sm" onclick="crm_admin_show('修改公司大事件信息','<?php echo url('index/updatecourse',['id'=>$vv['id']]); ?>')">
                          <i class="layui-icon">&#xe642;</i>
                        </button>
                        <button class="layui-btn layui-btn-sm" onclick="del('<?php echo $vv['id']; ?>')"><i class="layui-icon">&#xe640;</i>
                        </button>
                    </span></blockquote>
                  <p>发表时间:<?php echo date('Y年m月d日',$vv['createtime']); ?></p>
                </div>
              </li>
              <?php endforeach; endif; else: echo "" ;endif; ?>
              <li class="layui-timeline-item">
                <i class="layui-icon layui-timeline-axis"></i>
                <div class="layui-timeline-content layui-text">
                  <div class="layui-timeline-title">过去</div>
                </div>
              </li>
            </ul> 
          
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
    function del(id)
    {
      layer.confirm("您确定删除此大事件吗",function(){
          $.ajax({
            url:"<?php echo url('index/delcourse'); ?>",
            data:{id:id},
            type:"post",
            success:function(data)
            {
              var status = JSON.parse(data);
              layer.msg(status.msg,{icon: status.icon,time:1000},function () {window.location.reload();});
            }
          });
      });
    }
  </script>
</body>
</html>