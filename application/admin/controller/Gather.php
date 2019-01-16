<?php
namespace app\admin\controller;
use app\admin\controller\base\Base;
use app\admin\model\Article;
use app\admin\model\Arttype;
class Gather extends Base
{
	public function index()
	{
		return $this->fetch();
	}
}