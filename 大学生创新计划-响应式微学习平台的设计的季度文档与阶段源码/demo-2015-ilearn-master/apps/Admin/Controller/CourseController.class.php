<?php 
namespace Admin\Controller;
use Think\Controller;

class CourseController extends CommonController

{
	public function allcourse(){
		//$this->isadmin();
		$courseview = D('CourseView');
		$data = $courseview->select();
		$this->assign('allcourse',$data);
		$this->display();
	}

}

