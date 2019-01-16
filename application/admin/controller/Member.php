<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Member as Members;
use app\admin\model\Arttype;
class Member extends Base
{
	public function index()
	{
		if(request()->isPost()){

		}else{
			$list = (new Members)->where("type=0")->paginate(10);
			$list2 = (new Members)->where("type=1")->paginate(10);
			$list3 = (new Members)->where("type=2")->paginate(10);
			$list4 = (new Members)->where("type=3")->paginate(10);
		}
		$this->assign('list',$list);
		$this->assign('list2',$list2);
		$this->assign('list3',$list3);
		$this->assign('list4',$list4);
		return $this->fetch();
	}
	// 后台添加加盟商
	public function add()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			$data['createtime'] = time();
			$data['type'] = 1;
			$re = (new Members)->insert($data);
			if($re){
				$return = array("msg"=>"后台添加加盟商信息成功",'icon'=>6);
			}else{
				$return = array("msg"=>"后台添加加盟商信息失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			return $this->fetch();
		}
	}
}