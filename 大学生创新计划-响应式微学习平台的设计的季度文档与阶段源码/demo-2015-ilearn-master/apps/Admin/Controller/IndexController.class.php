<?php
namespace Admin\Controller;
use Admin\Controller;

class IndexController extends CommonController {

    public function index(){
    	$this->display();
    }

    //处理管理员的登录，作为后台主页，与前台会有所不同，需要思维的区分
    public function adminlogin(){
    	$aname = I('post.name');
    	$apwd = I('post.pwd');
    	if ($aname && $apwd) {
    		$admin = D('admin');
    		$rs = $admin->adminlogin($aname,$apwd);
    	}
    	
        if($rs){
        $_SESSION['aname'] = $aname;
        $_SESSION['aid']=$rs['id'];
        }
        $msg1='欢迎归来，我的管理员。';
        $msg0= '对不起，你不是管理员';
        $url ='../index/adminhome';
        //调用基类方法，进行结果判断
        $this->issuccess($rs,$msg0,$msg1,$url);


    }


    //进入后台主页控制器
    public function adminhome(){
        //$this->isadmin();
		$this->display();
	
    }
}