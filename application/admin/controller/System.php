<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\System as Systems;
class System extends Base
{
	public function  index()
	{
		if(request()->isPost()){
			$system = (new Systems)->find();
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
			if(empty($system)){
				$re = (new Systems)->insert($data);
			}else{
				$re = (new Systems)->where('id',$system['id'])->update($data);
			}	
			if($re){
				$return = array('msg'=>"网站状态编辑成功",'icon'=>6);
			}else{
				$return = array('msg'=>"网站状态编辑失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$system = (new Systems)->find();
			$this->assign("system",$system);
			return $this->fetch();
		}
	}
	// 返回图片
	public function imghaha()
	{
		$system = (new Systems)->find();
		$path = json_decode($system['path'],true);
		$html="";
		if(!empty($path)){
			foreach ($path as $key => $value) {
				$html.="<dd class='upload-icon-img'><div class='upload-pre-item'><i onclick='deleteImg($(this))'   class='layui-icon'></i><img src='".$value."' class='img' ><input type='hidden' name='case_images[]' value='".$value."' /></div></dd>";
			}
		}
        return $html;
	}
	 public function upload(){
      $pathName  =  $this->request->param('path');//图片存放的目录
      $file = request()->file('file');//获取文件信息
      $path =  'static/uploads/' . (!empty($pathName) ? $pathName : 'case_images');//文件目录
      //创建文件夹
      if(!is_dir($path)){
          mkdir($path, 0755, true);
      }
      $info = $file->move($path);//保存在目录文件下
      if ($info && $info->getPathname()) {
          $data = [
              'status' => 1,
              'data' =>  '/'.$info->getPathname(),
          ];
          echo exit(json_encode($data));
      } else {
          echo exit(json_encode($file->getError()));
      }
  }
}