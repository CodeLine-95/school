<?php
namespace app\index\controller\base;
use think\Controller;
use app\index\model\System;
class Base extends Controller
{
    public function _initialize(){
        $system = (new System)->find();
        $this->assign('system',$system);
    }
}
