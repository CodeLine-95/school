<?php
namespace app\admin\controller;
use app\admin\model\Admin as Admins;
use think\Controller;
use app\admin\model\Rule;
use app\admin\model\System;
class Login extends Controller
{
    public function login(){
        $system = (new System)->find();
        $path = json_decode($system['path'],true);
        $this->assign('path',$path);
        $this->assign('system',$system);
        return $this->fetch();
    }
    /**
     * @function login_action
     * @return  \jsonRPCServer string
     */
    public function login_action(){
        if (request()->isPost()) {
                $post = json_decode(request()->param()['data'],true);
                $res = (new Admins)->where('user_name',$post['user_name'])->find();
                if(empty($res)){
                  $data = [
                      'msg' => '您的账号输入错误，请重新填写！！！',
                      'icon' => 5
                  ];
                }else{
                  if (cms_pwd_verify($post['user_pwd'],$res['user_pwd'])) {
                     $AuthRule = new Rule();
                     $info = $AuthRule->getRoleInfo($res['role_id']);
                     $update = [
                         'last_login' => time(),
                         'user_host'  => request()->ip()
                     ];
                     (new Admins)->where('user_name',$post['user_name'])->update($update);
                     $session_user = array(
                         'uid'   => $res['id'],
                         'type'   => 2,
                         'username' => $res['user_name'],
                         'rolename' => $info['title'],
                         'rule'     => $info['rules'],
                         'rulename' => $info['url'],
                     );
                     session('user',$session_user);
                     $data = [
                         'msg'  => '登录成功，正在跳转中.....',
                         'icon'  => 6,
                     ];
                  }else{
                    $data = [
                      'msg' => '您的密码输入错误，请重新填写！！！',
                      'icon' => 5
                    ];
                  }
                }
            return json_encode($data);
        }
    }
}
