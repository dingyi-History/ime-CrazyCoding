<?php 
namespace Home\Controller;
use Think\Controller;

class CourseController extends CommonController
{

//展示所有教程
	public function showallcourse(){
		$this->showtype();
		$course = D('course');
		$data = $course->showallcourse();
		$this->assign('allcourse',$data);
		$this->display();
	}

//分类显示教程
	public function typecourse(){
		$this->showtype();
		$typeid = I('get.id');
		$course = D('course');
		$nowid=null;
		$data = $course ->typecourse($typeid,$nowid);
		$this->assign('showtypecourse',$data);

		$type = D('type');
		$t = $type->showtype($typeid);
		
		$this->assign('nowtype',$t[$typeid-1]);
		$this->display();
	}


//详细展示一个教程的内容，步骤式内容
	public function showonecourse(){
		$this->showtype();
		$cid =I('get.id');
		$course=D('course');
		$data = $course->showonecourse($cid);
		$this->assign('showonecourse',$data[0]);

		$ctypeid = $data[0]['ctypeid'];
		$sidecourse = $course->typecourse($typeid,$cid);
		$this->assign('othercourse',$sidecourse);

		$this->display();
	}


	//做用户是否登录判断再显示添加教程页面
	public function showaddcourse(){
		$this->showtype();
		$this->isuser();
		$this->display();
	}


//业务处理的方法
	//添加教程的业务处理
	public function addcourse(){
		$this->showtype();
		$this->isuser();
		$cuserid = session('userinfo.uid');
		$cname = I('post.cname');
		$ctitle = I('post.ctitle');
		$ctypeid = I('post.ctypeid');
		$ccontent = I('post.ccontent');//肯定是个关于对应步骤内容的数组
		$ctime=date('Y-m-d H:i:s',time());

		$course = D('course');
		$data = $course->addcourse($cname,$cuserid,$ctitle,$ctypeid,$ccontent,$ctime);
		if($data)
		{
			$msg='恭喜你！分享成功，谢谢';
			$url='/course/showallcourse';
		}
		else{
			$msg='对不起，分享失败';
			$url='/course/showaddcourse';
		}
		$this->issuccess($msg,$url);

	}

}