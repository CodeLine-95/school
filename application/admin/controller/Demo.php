<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
class Demo extends Base
{
	public function index(){
		return $this->fetch();
	}
	
	public function uploadAction(){
		
		$upload = new \upload\Upload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name'],ROOT_PATH.'public/video/'.date('Ymd',time()));
		return $upload->apiReturn();
	}
	public function text()
	{
		return $this->fetch();
	}
}