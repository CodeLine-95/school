<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Admin;
use app\admin\model\Path;
use app\admin\model\Url;
use app\admin\model\Seoxiong;
use app\admin\model\School as Schools;
use app\admin\model\Hands as Hand;
use app\admin\model\Course as Courser;
use think\Cache;
class Index extends Base
{
	// 首页
    public function index()
    {
        return $this->fetch();
    }
    // 修改个人信息
    public function member()
    {
        if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            unset($data['file']);
            $data['user_face'] = $data['ser_pic'];
            unset($data['ser_pic']);
            $id = $data['id'];
            unset($data['id']);
            $re = (new Admin)->where('id',$id)->update($data);
            if($re){
                $return = array('msg'=>"账户信息编辑成功",'icon'=>6);
            }else{
                $return = array('msg'=>"账户信息编辑失败",'icon'=>5);
            }
            return json_encode($return);
        }else{
            $user = session('user');
            $member = (new Admin)->where('id',$user['uid'])->find()->toArray();
            $this->assign("member",$member);
            return $this->fetch();
        }
    }
    // 控制台
    public function console()
    {
        //服务器可用空间
        $disk = $this->getFileSize(disk_free_space('.'));
        $this->assign('server',$_SERVER);
        $this->assign('disk',$disk);
    	return $this->fetch();
    }
     // 修改密码
    public function password()
    {
        if(request()->isPost()){
            $data = input('post.');
            $user= session('user');
            $pass =  cms_pwd_encode($data['pass']);
            $re = (new Admin)->where('id',$user['uid'])->update(array('user_pwd'=>$pass));
            if($re){
                $return = array('msg'=>"更改密码成功",'icon'=>6);
            }else{
                $return = array('msg'=>"更改密码失败",'icon'=>5);
            }
            return json_encode($return);
        }else{
            return $this->fetch();
        }
    }
     // 退出登陆
    public function logout()
    {
    	session('user',NULL);
        $data = [
            'msg' => '退出成功！！！',
            'icon' => 6
        ];
        return json_encode($data);
    }
    // 清除缓存
    public function delruntime()
    {
        $this->clear_sys_cache();
        $this->clear_temp_ahce();
        $this->clear_log_chache();
        return 1;
    }
    public function clear_sys_cache() {
        Cache::clear();
        return true;
    }
    // 清除模版缓存 不删除 temp目录
    public function clear_temp_ahce() {
      array_map( 'unlink', glob( TEMP_PATH.DS.'.php' ) );
      return true;
    }
    // 清除日志缓存 不删出log目录
    public function clear_log_chache() {
      $path = glob( LOG_PATH.'/' );
      foreach ($path as $item) {
        array_map( 'unlink', glob( $item.DS.'.' ) );
        rmdir( $item );
      }
      return true;
    }
    //上传demo
    public function upload(){

        $file= $_POST['img'];
        if (strstr($file,",")){
            $file = explode(',',$file);
            $file = $file[1];
      }

        if (!is_dir("uploads/".date('Ymd',time()).'/')) {                    //创建路径
            mkdir("uploads/".date('Ymd',time()).'/');
        }

        $url = "uploads/".date('Ymd',time()).'/';
        //当文件存在
        $md5FileName = md5("25220_".date("His",time())."_".rand(1111,9999)).'.jpg';
        if (file_exists($url.$md5FileName)) {
            $urls=$url.$md5FileName;
            $msg = [
                'msg'  => '文件已存在!请不要重复上传....',
                'url'  => '/'.$urls,
                'icon' => 'warning'
            ];
        }else{//当文件不存在
            $urls=$url.$md5FileName;
            $bool = file_put_contents($urls, base64_decode($file));
            if($bool){
                $msg = [
                    'msg'  => '文件上传成功....',
                    'url'  => '/'.$urls,
                    'icon' => 'success'
                ];
            }else{
                $msg = [
                    'msg'  => '文件上传失败....',
                    'icon' => 'error'
                ];
            }
        }
        return $msg;
    }
    // 图片相册
    public function photo()
    {
        if(request()->isPost()){

        }else{
            $list = (new Path)->where('type',1)->paginate(10);
        }
        $this->assign('list',$list);
        return $this->fetch();
    }
    // 添加图片
    public function  addphoto()
    {
        if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            unset($data['file']);
            $data['type']=1;
            $data['createtime']=time();
            $re = (new Path)->insert($data);
            if($re){
                $return = array("msg"=>"添加图片成功","icon"=>6);
            }else{
                $return = array("msg"=>"添加图片失败","icon"=>5);
            }
            return json_encode($return);
        }else{
            return $this->fetch();
        }
    }
    // 编辑图片
    public function updatephoto($id=0)
    {
        if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            unset($data['file']);
            $re = (new Path)->update($data);
            if($re){
                $return = array("msg"=>"编辑图片成功","icon"=>6);
            }else{
                $return = array("msg"=>"编辑图片失败","icon"=>5);
            }
            return json_encode($return);
        }else{
            $photo = (new Path)->where('id',$id)->find();
            $this->assign('photo',$photo);
            return $this->fetch();
        }
    }
    // 删除图片
    public function delphoto()
    {
        $id = input('post.id');
        if(Path::destroy($id)){
        $return = array("msg"=>"删除图片成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除图片失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 链接列表
    public function urls()
    {
    	if(request()->isPost()){

    	}else{
    		$list = (new Url)->paginate(10);
    		$this->assign('list',$list);
    		return $this->fetch();
    	}
    }
    // 添加链接
    public function addurl()
    {
    	if (request()->isPost()) {
    		$data = json_decode(input('post.data'),true);
    		$data['createtime'] = time();
    		$re = (new Url)->insert($data);
    		if($re){
    			$return = array("msg"=>"添加链接成功","icon"=>6);
    		}else{
    			$return = array("msg"=>"添加链接失败","icon"=>5);
    		}
    		return json_encode($return);
    	}else{
    		return $this->fetch();
    	}
    }
    // 编辑链接
    public function updateurl($id=0)
    {
    	if(request()->isPost()){
    		$data = json_decode(input('post.data'),true);
    		$re = (new Url)->update($data);
    		if($re){
    			$return = array("msg"=>"编辑链接成功","icon"=>6);
    		}else{
    			$return = array("msg"=>"编辑链接失败","icon"=>5);
    		}
    		return json_encode($return);
    	}else{	
    		$url = (new Url)->where('id',$id)->find();
    		$this->assign('url',$url);
    		return $this->fetch();
    	}
    }
    // 删除链接
    public function delurl()
    {
    	$id = input('post.id');
        if(Url::destroy($id)){
        $return = array("msg"=>"删除链接成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除链接失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 合作单位列表
    public function hands()
    {
    	if(request()->isPost()){

    	}else{
    		$list = (new Hand)->paginate(10);
    		$this->assign('list',$list);
    		return $this->fetch();
    	}
    }
    // 添加合作单位
    public function addhand(){
    	if(request()->isPost()){
    		$data = json_decode(input('post.data'),true);
    		unset($data['file']);
    		$data['createtime'] = time();
    		$re = (new Hand)->insert($data);
    		if($re){
    			$return = array("msg"=>"添加合作单位成功",'icon'=>6);
    		}else{
    			$return = array("msg"=>"添加合作单位失败",'icon'=>5);
    		}
    		return json_encode($return);
    	}else{
    		return $this->fetch();
    	}
    }
    // 编辑合作单位
    public function updatehand($id=0){
    	if(request()->isPost()){
    		$data = json_decode(input('post.data'),true);
    		unset($data['file']);
    		$re = (new Hand)->update($data);
    		if($re){
    			$return = array("msg"=>"编辑合作单位成功",'icon'=>6);
    		}else{
    			$return = array("msg"=>"编辑合作单位失败",'icon'=>5);
    		}
    		return json_encode($return);
    	}else{
    		$hand = (new Hand)->where('id',$id)->find();
    		$this->assign('hand',$hand);
    		return $this->fetch();
    	}
    }
    // 删除合作单位
    public function delhand(){
    	$id = input('post.id');
        if(Hand::destroy($id)){
        $return = array("msg"=>"删除合作单位成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除合作单位失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 公司大事件
    public function course()
    {
        if(request()->isPost()){

        }else{
            $list = (new Courser)->order('time','desc')->select();
            $this->assign('list',$list);
            return $this->fetch();
        }
    }
    // 添加公司大事件
    public function addcourse()
    {
        if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            $data['time'] = strtotime($data['time']);
            $data['createtime'] = time();
            unset($data['file']);
            $re = (new Courser)->insert($data);
            if($re){
                $return=array("msg"=>"添加公司大事件成功","icon"=>6);
            }else{
                $return=array("msg"=>"添加公司大事件失败","icon"=>5);
            }
            return json_encode($return);
        }else{

            return $this->fetch();
        }
    }
    // 编辑公司大事件
    public function updatecourse($id=0)
    {
       if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            $data['time'] = strtotime($data['time']);
            unset($data['file']);
            $re = (new Courser)->update($data);
            if($re){
                $return=array("msg"=>"编辑公司大事件成功","icon"=>6);
            }else{
                $return=array("msg"=>"编辑公司大事件失败","icon"=>5);
            }
            return json_encode($return);
        }else{
            $course = (new Courser)->where('id',$id)->find();
            $this->assign('course',$course);
            return $this->fetch();
        } 
    }
    // 删除公司大事件
    public function delcourse()
    {
        $id = input('post.id');
        if(Courser::destroy($id)){
        $return = array("msg"=>"删除大事件成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除大事件失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 熊掌号
    public function xiong()
    {
        if(request()->isPost()){
            $data = json_decode(input('post.data'),true);
            if(empty($data['id'])){
                $re = (new Seoxiong)->insert($data);
            }else{
                $re = (new Seoxiong)->update($data);
            }
            if($re){
                $return=array("msg"=>"站点熊掌号设置成功","icon"=>6);
            }else{
                $return=array("msg"=>"站点熊掌号设置失败","icon"=>5);
            }
            return json_encode($return);
        }else{
            $xiong = (new Seoxiong)->find();
            $this->assign('xiong',$xiong);
            return $this->fetch();
        }
    }
    // 宣传片库
    public function  video()
    {
        if(request()->isPost()){

        }else{
            $list = (new Path)->where('type',2)->paginate(10);
            $this->assign('list',$list);
            return $this->fetch();
        }
    }
    // 上传宣传片
    public function addvideo()
    {
        if(request()->isPost()){

        }else{
            return $this->fetch();
        }
    }
    // 编辑宣传片
    public function updatevideo()
    {
        if(request()->isPost()){

        }else{
            return $this->fetch();
        }
    }
    // 删除宣传片
    public function delvideo()
    {
        $id = input('post.id');
        if(Path::destroy($id)){
        $return = array("msg"=>"删除宣传片成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除宣传片失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 分校区管理
    public function school()
    {
        if(request()->isPost()){

        }else{
        	$list = (new Schools)->paginate(10);
        	$this->assign('list',$list);
            return $this->fetch();
        }
    }
    // 添加分校区
    public function addschool()
    {
       if(request()->isPost()){
       		$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$i=0;
	        $path = array();
	        foreach ($data as $key => $value) {
	            if(strpos($key,"case_images")!== false){
	                $path[$i] = $value;
	                unset($data[$key]);
	                $i++;
	            }
	        }
	        $data['path'] = json_encode($path);
	        $data['createtime']=time();
	        $re = (new Schools)->insert($data);
	        if($re){
	        	$return = array("msg"=>"添加分校区成功","icon"=>6);
	        }else{
	        	$return = array("msg"=>"添加分校区失败","icon"=>5);
	        }
	        return json_encode($return);
        }else{
            return $this->fetch();
        } 
    }
    // 编辑分校区
    public function updateschool($id=0)
    {
       if(request()->isPost()){
       		$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$i=0;
	        $path = array();
	        foreach ($data as $key => $value) {
	            if(strpos($key,"case_images")!== false){
	                $path[$i] = $value;
	                unset($data[$key]);
	                $i++;
	            }
	        }
	        $data['path'] = json_encode($path);
	        $re = (new Schools)->update($data);
	        if($re){
	        	$return = array("msg"=>"编辑分校区成功","icon"=>6);
	        }else{
	        	$return = array("msg"=>"编辑分校区失败","icon"=>5);
	        }
	        return json_encode($return);
        }else{
        	$school = (new Schools)->where('id',$id)->find();
        	$this->assign("school",$school);
            return $this->fetch();
        } 
    }
    // 删除分校区
    public function delschool()
    {
       $id = input('post.id');
        if(Schools::destroy($id)){
        $return = array("msg"=>"删除分校区成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除分校区失败","icon"=>5);
        }
        return json_encode($return);
    }
    // 返回图片
	public function schoolpath()
	{
		$id=input('post.id');
		$system = (new Schools)->where('id',$id)->find();
		$path = json_decode($system['path'],true);
		$html="";
		if(!empty($path)){
			foreach ($path as $key => $value) {
				$html.="<dd class='upload-icon-img'><div class='upload-pre-item'><i onclick='deleteImg($(this))'   class='layui-icon'></i><img src='".$value."' class='img' ><input type='hidden' name='case_images[]' value='".$value."' /></div></dd>";
			}
		}
        return $html;
	}
}
