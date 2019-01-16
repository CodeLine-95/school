<?php
namespace app\index\controller;
use app\index\controller\base\Base;
class Index extends Base
{
    public function index()
    {
        return $this->fetch();
    }
}
