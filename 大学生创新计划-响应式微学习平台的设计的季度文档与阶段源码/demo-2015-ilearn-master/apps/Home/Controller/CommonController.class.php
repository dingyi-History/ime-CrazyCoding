<?php 
namespace Home\Controller;
use Think\Controller;

class CommonController extends Controller
{
	//统一的结果处理方法
	public function issuccess($msg,$url){
		session('msg',$msg);
		$this->redirect($url);
	    	
	}
	
//对于必须登录才能看到的页面进行判断是否登录，没登陆则跳转到登录页面提示请登录
	public function isuser()
	{
		$user = I('session.userinfo');
		if(empty($user))
		{
			$msg='对不起，请登录后操作。';
			$url='/user/login';
			$this->issuccess($msg,$url);
		}
	}


//将分类输入到模板文件
	public function showtype(){
		$type = D('type');
		$data = $type->showalltype();
		$this->assign('alltype',$data);
	}



}