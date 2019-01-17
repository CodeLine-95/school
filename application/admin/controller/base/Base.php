<?php
namespace app\admin\controller\base;
use app\admin\model\Admin;
use app\admin\model\System as Systems;
use think\Controller;
use app\admin\model\Rule;
class Base extends Controller
{
    public $user;
    public function _initialize(){
        $this->user = session('user');
        $user = $this->user;
        if(!$user['uid']||!$user['username']){
            $this->redirect('login/login');
        }else{
            $this->assign('user',session('user'));
        }
        $auth = new \auth\Auth();
        $module     = strtolower(request()->module());
        $controller = strtolower(request()->controller());
        $action     = strtolower(request()->action());
        $url        = $module."/".$controller."/".$action;
        //跳过检测以及主页权限的操作
        $user['rulename'][] = 'admin/index/index';
        $user['rulename'][] = 'admin/index/welcome';
        $user['rulename'][] = 'admin/admin/pwdedit';
        $user['rulename'][] = 'admin/admin/setting';
        $user['rulename'][] = 'admin/admin/upload';
        $user['rulename'][] = 'admin/admin/delruntime';
        $user['rulename'][] = 'admin/index/logout';
        //实时检测用户使用权限的操作 
        if($user['uid']!=1){
            if(!in_array($url,$user['rulename'])){
                if(!$auth->check($url,$user['uid'])){
                    $this->error('抱歉，您没有操作权限');
                }
            }
        }
        $member = (new Admin)->where('id',$user['uid'])->find()->toArray();
        $systems = (new  Systems)->find()->toArray();
        $this->assign('systems',$systems);
        $this->assign('member',$member);
        $this->assign('publics',$this->user);
        //分配权限功能链接
        $node = new Rule();
        $this->assign([
            'menu' => $node->getMenu($user['rule'])
        ]);
    }
    
    public function videoAction(){
	    $upload = new \upload\Upload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name'],'video/'.date('Ymd',time()));
		return $upload->apiReturn();
    }
    
    public function musicaction(){
	    $upload = new \upload\Upload($_FILES['file']['tmp_name'],$_POST['blob_num'],$_POST['total_blob_num'],$_POST['file_name'],'audio/'.date('Ymd',time()));
		return $upload->apiReturn();
    }

    /**
     * 字节转换兆
     * @param $Bytes
     * @return string
     */
    public function getFileSize($Bytes){
        $p = 0;
        $format='bytes';
        if($Bytes>0 && $Bytes<1024){
            $p = 0;
            return number_format($Bytes).' '.$format;
        }
        if($Bytes>=1024 && $Bytes<pow(1024, 2)){
            $p = 1;
            $format = 'KB';
        }
        if ($Bytes>=pow(1024, 2) && $Bytes<pow(1024, 3)) {
            $p = 2;
            $format = 'MB';
        }
        if ($Bytes>=pow(1024, 3) && $Bytes<pow(1024, 4)) {
            $p = 3;
            $format = 'GB';
        }
        if ($Bytes>=pow(1024, 4) && $Bytes<pow(1024, 5)) {
            $p = 3;
            $format = 'TB';
        }
        $Bytes /= pow(1024, $p);

        return number_format($Bytes, 3).' '.$format;
    }
}
