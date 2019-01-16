<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:82:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/touch/xyaddress.html";i:1547368731;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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
          <div class="layui-card-header">智能检索经纬度</div>
          <div class="layui-card-body" pad15>
          	<div class="layui-form" lay-filter="">
              <div class="layui-form-item">

                <label class="layui-form-label">定位位置</label>
                <div class="layui-input-block">
                  <input type="text" name="naddress" value=""  readonly lay-verify="required|naddress" id="naddress" autocomplete="off" placeholder="此处显示真实的地图定位" class="layui-input">
                </div>
            </div>
				<div class="layui-form-item">
				<label class="layui-form-label">X</label>
                <div class="layui-input-inline">
                  <input type="text" name="xaddress" value="" readonly lay-verify="required|xaddress" id="xaddress" autocomplete="off" placeholder="此处显示地图定位的X值" class="layui-input">
                </div>

                <label class="layui-form-label">Y</label>
                <div class="layui-input-inline">
                  <input type="text" name="yaddress" value="" readonly lay-verify="required|yaddress" id="yaddress" autocomplete="off" placeholder="此处显示地图定位的Y值" class="layui-input">
                </div>

                <div class="layui-input-inline">
                  <button class="layui-btn" lay-submit lay-filter="setmyinfo">点击提交</button>
                </div>
              </div>
            </div>
			<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=a73GvnaKjO14fRT5NOUmCzry3XafcFcd"></script>
            <div id="allmap" style="height:800px;width:100%;"></div>
			<script type="text/javascript">
			    // 百度地图API功能
			    var map = new BMap.Map("allmap");
			    var point = new BMap.Point(116.415994,39.907966);
			    map.centerAndZoom(point,12);
			    map.enableScrollWheelZoom(true);
			    var geoc = new BMap.Geocoder();    

			    map.addEventListener("click", function(e){   
			        //通过点击百度地图，可以获取到对应的point, 由point的lng、lat属性就可以获取对应的经度纬度     
			        var pt = e.point;
			        geoc.getLocation(pt, function(rs){
			            //addressComponents对象可以获取到详细的地址信息
			            var addComp = rs.addressComponents;
			            var site = addComp.province + ", " + addComp.city + ", " + addComp.district + ", " + addComp.street + ", " + addComp.streetNumber;
			            //将对应的HTML元素设置值
			            $("#naddress").val(site);
			            $("#xaddress").val(pt.lng);
			            $("#yaddress").val(pt.lat);
			        });        
			    });
			    layui.use(['form','layer','upload'], function(){
		          $ = layui.jquery;
		          var form = layui.form,layer = layui.layer;
		          var upload = layui.upload;
		              //监听提交
		              form.on('submit(setmyinfo)', function(data){
		                //发异步，把数据提交给php
		                $.ajax({
		                    url:"<?php echo url('touch/xyaddress'); ?>",
		                    type:"POST",
		                    data: {
		                        data:JSON.stringify(data.field)
		                    },
		                    success:function (data) {
		                        var status = JSON.parse(data);
		                        if (status.icon == 6){
		                            layer.msg(status.msg,{icon: status.icon,time:1000},function () {
		                                var index = parent.layer.getFrameIndex(window.name);
										parent.layer.close(index);//关闭当前页
		                           });
		                        } else {
		                            layer.msg(status.msg,{icon: status.icon,time:1000});
		                        }
		                    }
		                });
		            return false;
		            });

		    });
			</script>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>