<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Touch as Touchs;
class Touch extends Base
{
	public function index()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$touch = (new Touchs)->find();
			if(empty($touch)){
				$re = (new Touchs)->insert($data);
			}else{
				$data['id'] = $touch['id'];
				$re = (new Touchs)->update($data);
			}
			
			if($re){
				$return = array("msg"=>"编辑联系方式成功",'icon'=>6);
			}else{	
				$return = array("msg"=>"编辑联系方式失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$touch = (new Touchs)->find();
			$xyaddress = session('xyaddress');
			if(empty($xyaddress)){
				$xyaddress = $touch['xy'];
			}
			$this->assign('xyaddress',$xyaddress);
			$this->assign('touch',$touch);
			return $this->fetch();
		}
	}
	// 谷歌地图定位
	public function xyaddress()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			session('xyaddress',$data['xaddress'].",".$data['yaddress']);
			$return = array("msg"=>"获取坐标成功",'icon'=>6);
			return json_encode($return);
		}else{
		return $this->fetch();
	    }
	}

}