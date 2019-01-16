<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Notice as Notices;
class Notice extends Base
{
	
	public function index()
	{
		if(request()->isPost()){

		}else{
			$list = (new Notices)->paginate(10);
		}
		foreach ($list as $key => $value) {
			if(mb_strlen($value['keywords'])>10){
				$value['keywords'] = mb_substr($value['keywords'],0,8,'uft-8')."...";
			}
		}
		$this->assign('list',$list);
		return $this->fetch();
	}

	// 添加公告
	public function add()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$data['createtime']=time();
			$re = (new Notices)->insert($data);
			if($re){
				$return = array("msg"=>"添加公告成功",'icon'=>6);
			}else{
				$return = array("msg"=>"添加公告失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			return $this->fetch();
		}
	}
	// 编辑公告
	public function update($id=0)
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$re = (new Notices)->update($data);
			if($re){
				$return = array("msg"=>"编辑公告成功",'icon'=>6);
			}else{
				$return = array("msg"=>"编辑公告失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$notice = (new Notices)->where('id',$id)->find();
			$this->assign('notice',$notice);
			return $this->fetch();
		}
	}
	// 发布公告公告状态
	public function status()
	{
		$id = input('post.id');
		$status = input('post.status');
		if($status==1){
			$data['status']=0;
		}else{
			$data['status']=1;
		}
		$data['issuetime']=time();
		$data['id'] = $id;
		$re = (new Notices)->update($data);
		if($re){
				$return = array("msg"=>"公告状态更改成功",'icon'=>6);
			}else{
				$return = array("msg"=>"公告状态更改失败",'icon'=>5);
			}
			return json_encode($return);
	}
	// 删除公告
	public function del()
	{
		$id = input('post.id');
		if(Notices::destroy($id)){
			$return = array("msg"=>"删除公告成功","icon"=>6);
		}else{
			$return = array("msg"=>"删除公告失败","icon"=>5);
		}
		return json_encode($return);
	}
}