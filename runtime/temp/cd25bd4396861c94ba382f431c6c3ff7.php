<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:81:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/index/addvideo.html";i:1547634517;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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
<style>
    #progress{
	    display: inline-block;
        width: 100px;
        height: 5px;
        background-color:#f7f7f7;
        box-shadow:inset 0 1px 2px rgba(0,0,0,0.1);
        border-radius:4px;
        background-image:linear-gradient(to bottom,#f5f5f5,#f9f9f9);
    }

    #finish{
        background-color: #149bdf;
        background-image:linear-gradient(45deg,rgba(255,255,255,0.15) 25%,transparent 25%,transparent 50%,rgba(255,255,255,0.15) 50%,rgba(255,255,255,0.15) 75%,transparent 75%,transparent);
        background-size:40px 40px;
        height: 100%;
    }
    form{
        margin-top: 50px;
    }
    .file {
    position: relative;
    display: inline-block;
    background: #00EE76;
    border: 1px solid #00EE76;
    border-radius: 4px;
    padding: 0px 12px;
    overflow: hidden;
    color: #fff;
    text-decoration: none;
    text-indent: 0;
    line-height: 38px;
}
.file input {
    position: absolute;
    display: inline-block;
    font-size: 100px;
    right: 0;
    top: 0;
    opacity: 0;
}
.file:hover {
    background: #00EE76;
    border-color: #00EE76;
    color: #fff;
    text-decoration: none;
}
</style>
<body>
  <div class="layui-fluid">
    <div class="layui-row layui-col-space15">
      <div class="layui-col-md12">
        <div class="layui-card">
          <div class="layui-card-header">添加视频</div>
          <div class="layui-card-body" pad15>
            
            <div class="layui-form" lay-filter="">
              <div class="layui-form-item">
                <label class="layui-form-label">视频标题</label>
                <div class="layui-input-block">
                  <input type="text" name="name" value="" autocomplete="off" placeholder="请输入公告标题" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                  <label for="ser_pic" class="layui-form-label">上传视频</label>
                  <div class="layui-input-block">
                      <div style="float: left;margin-right: 10px;">
                          <input type="text" name="path" id="ser_pic2" value="" style="float: left;width: 800px;" required="" autocomplete="off" class="layui-input" readonly>
                      </div>
                      <a href="javascript:;" class="file"><i class="layui-icon">&#xe67c;</i>上传视频
					    <input type="file" name="file" id="file">
					  </a>
<!--                       <button type="button" id="ser_pic" class="layui-btn"><i class="layui-icon">&#xe67c;</i>上传视频</button> -->
                      <div id="progress" style="clear: both;">
					     <div id="finish" style="width: 0%;text-align: right;" progress="0"></div>
					  </div>
                      <div class="layui-container" style="width: 1170px;">
                        <div class="layui-row layui-col-space15 margin15">
                            <section class="layui-card">
                                <div class="layui-card-body" style="width:500px;height:300px;margin-left:-31px">
                                    <div class="video" id="video" data-url="" style="width: 100%;"></div>
                                </div>
                            </section>
                        </div>
                    </div>
                  </div>
                </div>
              <div class="layui-form-item">
                <div class="layui-input-block">
                  <button class="layui-btn" lay-submit lay-filter="setmyinfo">点击提交</button>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript">
        

	    var fileForm = document.getElementById("file");
	    var xhr = new XMLHttpRequest();
        var form_data = new FormData();
        const LENGTH = 1024 * 2560;
        var start = 0;
        var end = start + LENGTH;
        var blob;
        var blob_num = 1;
        var is_stop = 0
        var arr = ["video/mp4"];
	    var upload = new upload();
	    fileForm.onchange = function(){
	        upload.addFileAndSend(this);
	    }
	    
	    function upload(){
	         //对外方法，传入文件对象
	        this.addFileAndSend = function(that){
	            if(contains(arr,that.files[0].type)){
	                var file = that.files[0];
	                blob = cutFile(file);
	                sendFile(blob,file);
	                blob_num += 1;
	            }else{
	                console.log('上传文件后缀名不合法');
	            }
	        }
	    }
	    
	    //验证上传文件后缀名
        function contains(arr, obj) {
            //while
            var i = arr.length;
            while(i--) {
                if(arr[i] === obj) {
                    return true;
                }
            }
            return false;
        }
		//切割文件
        function cutFile(file){
            var file_blob = file.slice(start,end);
            start = end;
            end = start + LENGTH;
            return file_blob;
        };
        //发送文件
        function sendFile(blob,file){
            var total_blob_num = Math.ceil(file.size / LENGTH);
            form_data.append('file',blob);
            form_data.append('blob_num',blob_num);
            form_data.append('total_blob_num',total_blob_num);
            form_data.append('file_name',file.name);
            xhr.open('POST',"<?php echo url('index/videoAction'); ?>",false);
            xhr.onreadystatechange = function () {
                var progress;
                var progressObj = document.getElementById('finish');
                if(total_blob_num == 1){
                    progress = '100%';
                }else{
                    progress = Math.ceil(Math.min(100,(blob_num/total_blob_num)* 100 )) +'%';
                }
                progressObj.style.width = progress;
                progressObj.innerHTML = progress;
                var t = setTimeout(function(){
                    if(start < file.size && is_stop === 0){
                        blob = cutFile(file);
                        sendFile(blob,file);
                        blob_num += 1;
                    }else{
                        setTimeout(t);
                    }
                },2000);
            }
            xhr.send(form_data);
            var data = JSON.parse(xhr.responseText);
            $('input[name=path]').val(data.file_path);
            $("#video").attr('data-url',data.file_path);
            var dataurl = $("#video").attr('data-url');
            if(dataurl!=false){
                layui.config({
                base: '/static/layuiadmin/layui_exts/'
                }).extend({
                    ckplayer: 'ckplayer'
                }).use(['jquery', 'ckplayer'], function() {
                    var $ = layui.$,
                        ckplayer = layui.ckplayer;
                    var vUrl = $('#video').data('url');
                    videoObject = {
                    container: '#video',
                    loop: true,
                    autoplay: false,
                    video: [
                        [vUrl, 'video/mp4']
                    ]
                    };
                    var player = new ckplayer(videoObject);
                });
            }
        }


        layui.use(['form','layer'], function(){
          $ = layui.jquery;
          var form = layui.form,layer = layui.layer;
          //监听提交
          form.on('submit(setmyinfo)', function(data){
            //发异步，把数据提交给php
            $.ajax({
                url:"<?php echo url('index/addvideo'); ?>",
                type:"POST",
                data: {
                    data:JSON.stringify(data.field)
                },
                success:function (data) {
                    var status = JSON.parse(data);
                    if (status.icon == 6){
                        layer.msg(status.msg,{icon: status.icon,time:1000},function () {
                            window.parent.location.reload();
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
</body>
</html>