<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"/home/wwwroot/school.wxn.fun/public/../application/admin/view/demo/index.html";i:1547626873;}*/ ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/static/home/js/jquery.min.js"></script>
    <style>
        #progress{
            width: 300px;
            height: 20px;
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
    </style>
</head>
<body>
<div id="progress">
    <div id="finish" style="width: 0%;text-align: right;" progress="0"></div>
</div>
<form action="<?php echo url('index/video'); ?>">
    <input type="file" name="file" id="file">
    <input type="text" name="videoPath">
</form>
<script>
    var fileForm = document.getElementById("file");
    var stopBtn = document.getElementById('stop');
    var upload = new Upload();

    fileForm.onchange = function(){
        upload.addFileAndSend(this);
    }

    function Upload(){
        var arr = ["video/mp4"];
        var xhr = new XMLHttpRequest();
        var form_data = new FormData();
        const LENGTH = 1024 * 1024;
        var start = 0;
        var end = start + LENGTH;
        var blob;
        var blob_num = 1;
        var is_stop = 0
        //对外方法，传入文件对象
        this.addFileAndSend = function(that){
	        console.log(that.file)
            if(contains(arr,that.files[0].type)){
                var file = that.files[0];
                blob = cutFile(file);
                sendFile(blob,file);
                blob_num += 1;
            }else{
                console.log('上传文件后缀名不合法');
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
        //停止文件上传
        this.stop = function(){
            xhr.abort();
            is_stop = 1;
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

            xhr.open('POST',"<?php echo url('index/video'); ?>",false);
            xhr.onreadystatechange = function () {
                var progress;
                var progressObj = document.getElementById('finish');
                if(total_blob_num == 1){
                    progress = '100%';
                }else{
                    progress = Math.floor(Math.min(100,(blob_num/total_blob_num)* 100 )) +'%';
                }
                progressObj.style.width = progress;
                progressObj.innerHTML = progress;
                var t = setTimeout(function(){
                    if(start < file.size && is_stop === 0){
                        blob = cutFile(file);
                        blob_num += 1;
                        sendFile(blob,file);
                        blob_num += 1;
                    }else{
                        setTimeout(t);
                    }
                },1000);
            }
            xhr.send(form_data);
            var data = JSON.parse(xhr.responseText);
            $('input[name=videoPath]').val(data.file_path);
            
        }
    }

</script>
</body>
</html>