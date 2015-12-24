<?php 
namespace Admin\Controller;
use Think\Controller;

class CommonController extends Controller
{
	//判断是否登录
	public function isadmin(){
		$aname = I('session.aname');
		if(empty($aname))
		{
			//重定向到指定的URL地址
			redirect('../../Home/index/index', 2, 'sorry,Loading...');
		}
	}


	//统一的结果处理方法
	public function issuccess($rs,$msg0,$msg1,$url){
		if ($rs) {
    		  $this->success($msg1, $url);
    	}
    	else{
    		$this->error($msg0);
    	}
	}
}