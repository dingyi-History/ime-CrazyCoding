<?php 
namespace Admin\Controller;
use Think\Controller;

class WayController extends CommonController
{
	public function allway(){
		$way = D('way');
		$data = $way -> allway();
		$this->assign('allway',$data);
		$this->display();
	}
}