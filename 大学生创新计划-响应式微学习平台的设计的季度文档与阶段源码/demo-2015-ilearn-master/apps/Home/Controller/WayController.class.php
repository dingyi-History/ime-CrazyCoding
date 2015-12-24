<?php 
namespace Home\Controller;
use Think\Controller;

class WayController extends CommonController
{

	//展示最新的分享的学习思想路径
	public function showway(){
		$this->showtype();

		$way = D('way');
		$data = $way->allway();
		$this->assign('allway',$data);
		$this->display();
	}


	public function addway(){
		$this->showtype();
		$this->isuser();

		$wtitle = I('post.wname');
		$wcontent = I('post.wcontent');
		$wuserid =$_SESSION['userinfo']['uid'];
		$wdate = date('Y-m-d H:i:s',time());;
		$way = D('way');
		$rs = $way->addway($wtitle,$wcontent,$wuserid,$wdate);
		if($rs)
		{
			$msg='谢谢，美好从分享开始！';
			
		}
		else{
			$msg='对不起，分享失败';
			
		}
		$url='../way/showway';
		$this->issuccess($msg,$url);


	}

}