<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController {
	
    public function indexabout(){
    	$this->showtype();
    	$this->display();
    }

    public function index(){
    	$this->showtype();
    	$course = D('course');
    	$data = $course->order('cid desc')->select();
    	$this->assign('course',$data);
    	$this->display();
    }

    public function ding(){
        $msg='感谢您来看我的简历！';
        session('msg',$msg);
        $this->display();
    }
}