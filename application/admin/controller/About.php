<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Teacher as Teachers;
class About extends Base
{
	// 关于我们
	public function index()
	{
		if(request()->isPost()){

		}else{
			return $this->fetch();
		}
	}
	// 名师专栏
	public function teacher()
	{
		if(request()->isPost()){

		}else{
			$list = (new Teachers)->paginate(10);
			$this->assign('list',$list);
			return $this->fetch();
		}
	}
	// 添加名师
	public function addteacher()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
    		unset($data['file']);
    		$data['createtime'] = time();
    		$re = (new Teachers)->insert($data);
    		if($re){
    			$return = array("msg"=>"添加名师成功",'icon'=>6);
    		}else{
    			$return = array("msg"=>"添加名师失败",'icon'=>5);
    		}
    		return json_encode($return);
		}else{
			return $this->fetch();
		}
	}
	// 编辑名师
	public function updateteacher($id=0)
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
    		unset($data['file']);
    		$re = (new Teachers)->update($data);
    		if($re){
    			$return = array("msg"=>"编辑名师信息成功",'icon'=>6);
    		}else{
    			$return = array("msg"=>"编辑名师信息失败",'icon'=>5);
    		}
    		return json_encode($return);
		}else{
			$teacher = (new Teachers)->where('id',$id)->find();
			$this->assign('teacher',$teacher);
			return $this->fetch();
		}
	}
	// 删除名师
	public function delteacher()
	{
		$id = input('post.id');
        if(Teachers::destroy($id)){
        $return = array("msg"=>"删除名师成功","icon"=>6);
        }else{
            $return = array("msg"=>"删除名师失败","icon"=>5);
        }
        return json_encode($return);
	}
}