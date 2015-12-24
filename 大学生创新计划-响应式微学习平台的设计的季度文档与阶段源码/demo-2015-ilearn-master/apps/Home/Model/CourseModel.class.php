<?php 
namespace Home\Model;
use Think\Model;

class CourseModel extends Model{

//显示所有的教程
	public function showallcourse(){
		$course = M('course');
		$data = $course->order('cid desc')->select();
		return $data;
	}

//显示各分类教程
	public function typecourse($typeid,$nowid)
	{
		$course = M('course');
		$condition['ctypeid']=array('EQ',"$typeid");
		$condition['cid']  = array('NEQ',"$nowid");
		$data = $course->where($condition)->select();
		return $data;
	}

//添加教程
	public function addcourse($cname,$cuserid,$ctitle,$ctypeid,$ccontent,$ctime)
	{
		$course = M('course');
		$data['cname']=$cname;
		$data['cuserid']=$cuserid;
		$data['ctitle']=$ctitle;
		$data['ctypeid']=$ctypeid;
		$data['ccontent'] = $ccontent;
		$data['ctime']=$ctime;
		$data = $course->data($data)->add();
		return $data;
	}	

//查询对应用户分享的教程
	public function mycourse($cuserid)
	{
		$course = D('course');
		$c['cuserid']=$cuserid;
		$data = $course->where($c)->select();
		return $data;
	}


//查询一个教程详情
	public function showonecourse($cid)
	{
		$course = D('course');
		$c['cid']= $cid;
		$data = $course->where($c)->select();
		return $data;
	}
}