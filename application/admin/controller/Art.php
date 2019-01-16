<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Article;
use app\admin\model\Arttype;
class Art extends Base
{
	public function index()
	{
		if(request()->isPost()){
			
			return json_encode($return);
		}else{
			$list = (new Article)->alias('aa')->join('misslml_arttype','aa.type=misslml_arttype.id')->field('aa.title,aa.author,aa.createtime,aa.lookcount,misslml_arttype.typename,aa.include,aa.id,aa.updatetime')->paginate(10);
			foreach ($list as $key => $value) {
				if(mb_strlen($value['title'])>8){
					$value['title'] = mb_substr($value['title'],0,8,'utf-8')."...";
				}
				if(mb_strlen($value['author'])>5){
					$value['author'] = mb_substr($value['author'],0,5,'utf-8')."...";
				}
			}
			$data = [
		   	  	'type'=>"",
		   	  	'value'=>""
	   	    ];
	   	    $this->assign('data',$data);
			$this->assign('list',$list);
			return $this->fetch();
		}
	}
	// 文章分类
	public function type()
	{
		if(request()->isPost()){
			$id = input('post.id');
			$re = (new Arttype)->where('id',$id)->delete();
			if($re){
				$return = array("msg"=>"删除分类成功","icon"=>6);
			}else{
				$return = array("msg"=>"删除分类失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$list = (new Arttype)->select();
			$this->assign('list',$list);
			return $this->fetch();
		}
	}
	// 添加文章分类
	public function addtype()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$data['createtime'] = time();
			$re = (new Arttype)->insert($data);
			if($re){
				$return = array("msg"=>"添加文章分类成功",'icon'=>6);
			}else{
				$return = array("msg"=>"添加文章分类失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			return $this->fetch();
		}
	}
	// 编辑文章分类
	public function updatetype($id=0)
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$re = (new Arttype)->update($data);
			if($re){
				$return = array("msg"=>"编辑文章分类成功",'icon'=>6);
			}else{
				$return = array("msg"=>"编辑文章分类失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$type = (new Arttype)->where('id',$id)->find();
			$this->assign('type',$type);
			return $this->fetch();
		}
	}
	// 添加文章
	public function add()
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$data['createtime'] = time();
			// var_dump($data);exit();
			$re = (new Article)->insert($data);
			if($re){
				$return = array("msg"=>"添加文章成功",'icon'=>6);
			}else{
				$return = array("msg"=>"添加文章失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$type = (new Arttype)->select();
			$this->assign('type',$type);
			return $this->fetch();
		}
	}
	// 编辑文章
	public function update($id=0)
	{
		if(request()->isPost()){
			$data = json_decode(input('post.data'),true);
			unset($data['file']);
			$data['updatetime'] = time();
			// var_dump($data);exit();
			$re = (new Article)->update($data);
			if($re){
				$return = array("msg"=>"编辑文章成功",'icon'=>6);
			}else{
				$return = array("msg"=>"编辑文章失败",'icon'=>5);
			}
			return json_encode($return);
		}else{
			$art = (new Article)->where('id',$id)->find();
			$type = (new Arttype)->select();
			$this->assign('art',$art);
			$this->assign('type',$type);
			return $this->fetch();
		}
	}
	// 删除文章
	public  function  del()
	{
	    $id = input('post.id');
		if(Article::destroy($id)){
		$return = array("msg"=>"删除文章成功","icon"=>6);
		}else{
			$return = array("msg"=>"删除文章失败","icon"=>5);
		}
		return json_encode($return);
	}
}