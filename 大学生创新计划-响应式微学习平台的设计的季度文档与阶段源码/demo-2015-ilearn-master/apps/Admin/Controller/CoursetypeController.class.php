<?php 
namespace Admin\Controller;
use Think\Controller;

class CoursetypeController extends CommonController
{

	public function alltype()
	{
		$type = D('coursetype');
		$data = $type ->alltype();
		$this->assign('alltype',$data);
		$this->display();
	}
}