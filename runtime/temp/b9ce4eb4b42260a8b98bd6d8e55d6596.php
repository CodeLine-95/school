<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:77:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/art/update.html";i:1547218417;s:69:"/home/wwwroot/school.wxn.fun/application/admin/view/public/title.html";i:1547449831;}*/ ?>
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
          <div class="layui-card-header">编辑文章</div>
          <div class="layui-card-body" pad15>
            
            <div class="layui-form" lay-filter="">
              <div class="layui-form-item">
                <label class="layui-form-label">文章标题</label>
                <div class="layui-input-block">
                  <input type="hidden" name="id" value="<?php echo $art['id']; ?>">
                  <input type="text" name="title" value="<?php echo $art['title']; ?>" autocomplete="off" placeholder="请输入文章标题" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">文章作者</label>
                <div class="layui-input-block">
                  <input type="text" name="author" value="<?php echo $art['author']; ?>" autocomplete="off" placeholder="请输入文章作者" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
              <label class="layui-form-label">文章分类</label>
              <div class="layui-input-block">
                <select name="type" lay-filter="aihao" id="type">
                  <?php if(is_array($type) || $type instanceof \think\Collection || $type instanceof \think\Paginator): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vv): $mod = ($i % 2 );++$i;?>
                  <option value="<?php echo $vv['id']; ?>" <?php if($art['type'] == $vv['id']): ?> selected="selected" <?php endif; ?>><?php echo $vv['typename']; ?></option>
                  <?php endforeach; endif; else: echo "" ;endif; ?>
                </select>
              </div>
            </div>
            <div class="layui-form-item">
              <label class="layui-form-label">创作类型</label>
              <div class="layui-input-block">
                <select name="org" lay-filter="aihao" id="org">
                  <option value="1" <?php if($art['org'] == 1): ?> selected <?php endif; ?>>原创文章</option>
                  <option value="0" <?php if($art['org'] == 0): ?> selected <?php endif; ?>>伪原创文章</option>
                </select>
              </div>
            </div>
              <div class="layui-form-item">
                <label class="layui-form-label">文章关键词</label>
                <div class="layui-input-block">
                  <input type="text" name="keywords" value="<?php echo $art['keywords']; ?>" autocomplete="off" placeholder="请输入文章关键词" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item layui-form-text">
                <label class="layui-form-label">文章描述</label>
                <div class="layui-input-block">
                  <textarea name="description" placeholder="请输入文章描述" class="layui-textarea"><?php echo $art['description']; ?></textarea>
                </div>
              </div>
              <div class="layui-form-item">
                <label class="layui-form-label">文章来源</label>
                <div class="layui-input-block">
                  <input type="text" name="source" value="<?php echo $art['source']; ?>" autocomplete="off" placeholder="请输入文章来源" class="layui-input">
                </div>
              </div>
              <div class="layui-form-item">
                  <label for="ser_pic" class="layui-form-label">文章缩略图</label>
                  <div class="layui-input-block">
                      <div style="float: left;margin-right: 10px;">
                          <input type="text" name="img" id="ser_pic2" value="<?php echo $art['img']; ?>" style="float: left;width: 800px;" required="" autocomplete="off" class="layui-input" readonly>
                      </div>
                      <button type="button" id="ser_pic" class="layui-btn"><i class="layui-icon">&#xe67c;</i>上传分类图片</button>
                      <button type="button" style="display: none;" id="demoAction" class="layui-btn"><i class="layui-icon">&#xe67c;</i>上传demo</button>
                      <?php if(empty($art['img']) == false): ?>
                        <div style="clear: both;" id="imgs">
                      <?php else: ?>
                        <div style="clear: both;display:none" id="imgs">
                      <?php endif; ?>
                          <img src="<?php echo $art['img']; ?>" alt="<?php echo $art['img']; ?>" id="ser_pic_img" style="max-width: 500px;max-height: 200px;">
                      </div>
                  </div>
                </div>
              <div class="layui-form-item">
                  <label for="content" class="layui-form-label">
                      <span class="x-red">*</span>文章详情
                  </label>
                  <div class="layui-input-block">
                      <textarea placeholder="请输入文章详情" id="content" name="content" ><?php echo $art['content']; ?></textarea>
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
         //实例化编辑器
         UE.getEditor('content',{autoFloatEnabled:false//是否保持toolbar位置不懂，默认为true
        });
</script>
    <script>
        layui.use(['form','layer','upload'], function(){
          $ = layui.jquery;
          var form = layui.form,layer = layui.layer;
          var upload = layui.upload;
          //上传图片实例
          upload.render({
              elem: '#ser_pic',
              url: '<?php echo url("index/upload"); ?>',
              accept:"images",
              exts:"jpg|png|gif|bmp|jpeg",
              auto:false,
              choose: function(obj){
                  obj.preview(function(index, file, result){
                      //图片链接（base64）
                      base64url = $('#ser_pic_img').attr('src');
                      ImgToBase64(convertBase64ToBlob(result), 720, function (base64) {
    
                      //可以在这里用ajax 请求后台上传图片  ，或者获取img标签src 上传
                      $.ajax({
                        url:'<?php echo url("index/upload"); ?>',
                        type:"POST",
                        data:{
                          img:base64
                        },
                        success:function(data){
                          if(data.icon == 'success'){
                            $('#ser_pic_img').attr('src', result);
                          $('#imgs').css('display','block');
                          $('input[name="img"]').attr('value',data.url);
                          layer.msg(data.msg,{icon: 6,time:1000});
                          }else{
                            layer.msg(data.msg,{icon: 5,time:1000});
                          }
                        }
                      });
                  });
                  });
              }
            });
              //监听提交
              form.on('submit(setmyinfo)', function(data){
                //发异步，把数据提交给php
                data.field.content = UE.getEditor('content').getContent();
                $.ajax({
                    url:"<?php echo url('art/update'); ?>",
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
            function convertBase64ToBlob(base64){
            var base64Arr = base64.split(',');
            var imgtype = '';
            var base64String = '';
            if(base64Arr.length > 1){
                //如果是图片base64，去掉头信息
                base64String = base64Arr[1];
                imgtype = base64Arr[0].substring(base64Arr[0].indexOf(':')+1,base64Arr[0].indexOf(';'));
            }
            // 将base64解码
            var bytes = atob(base64String);
            //var bytes = base64;
            var bytesCode = new ArrayBuffer(bytes.length);
            // 转换为类型化数组
            var byteArray = new Uint8Array(bytesCode);
    
            // 将base64转换为ascii码
            for (var i = 0; i < bytes.length; i++) {
                byteArray[i] = bytes.charCodeAt(i);
            }
    
            // 生成Blob对象（文件对象）
            return new Blob( [bytesCode] , {type : imgtype});
        };
        function ImgToBase64(file, maxLen, callBack) {
            var img = new Image();
    
            var reader = new FileReader();//读取客户端上的文件
            reader.onload = function () {
                var url = reader.result;//读取到的文件内容.这个属性只在读取操作完成之后才有效,并且数据的格式取决于读取操作是由哪个方法发起的.所以必须使用reader.onload，
                img.src = url;//reader读取的文件内容是base64,利用这个url就能实现上传前预览图片
            };
    
            img.onload = function () {
                //生成比例
                var width = img.width, height = img.height;
                //计算缩放比例
                var rate = 1;
                if (width >= height) {
                    if (width > maxLen) {
                        rate = maxLen / width;
                    }
                } else {
                    if (height > maxLen) {
                        rate = maxLen / height;
                    }
                };
    
    
                img.width = width * rate;
                img.height = height * rate;
                //生成canvas
                var canvas = document.createElement("canvas");
                var ctx = canvas.getContext("2d");
                canvas.width = img.width;
                canvas.height = img.height;
                ctx.drawImage(img, 0, 0, img.width, img.height);
                var base64 = canvas.toDataURL('image/jpeg', getCompressRate(1,showSize(base64url)));
                callBack(base64);
            };
            reader.readAsDataURL(file);
        }
    
        function getCompressRate(allowMaxSize,fileSize){ //计算压缩比率，size单位为MB
            var compressRate = 1;
            if(fileSize/allowMaxSize > 4){
                compressRate = 0.5;
            } else if(fileSize/allowMaxSize >3){
                compressRate = 0.6;
            } else if(fileSize/allowMaxSize >2){
                compressRate = 0.7;
            } else if(fileSize > allowMaxSize){
                compressRate = 0.8;
            } else{
                compressRate = 0.9;
            }
            result6 = compressRate;
            return compressRate;
        }
    
        function showSize(base64url) {
            //获取base64图片大小，返回MB数字
            var str = base64url.replace('data:image/png;base64,', '');
            var equalIndex = str.indexOf('=');
            if(str.indexOf('=')>0) {
                str=str.substring(0, equalIndex);
            }
            var strLength=str.length;
            var fileLength=parseInt(strLength-(strLength/8)*2);
            // 由字节转换为MB
            var size = "";
            size = (fileLength/(1024 * 1024)).toFixed(2);
            var sizeStr = size + "";                        //转成字符串
            var index = sizeStr.indexOf(".");                    //获取小数点处的索引
            var dou = sizeStr.substr(index + 1 ,2)            //获取小数点后两位的值
            if(dou == "00"){                                //判断后两位是否为00，如果是则删除00
                return sizeStr.substring(0, index) + sizeStr.substr(index + 3, 2)
            }
            return parseInt(size);
        }
    });
</script>
</body>
</html>