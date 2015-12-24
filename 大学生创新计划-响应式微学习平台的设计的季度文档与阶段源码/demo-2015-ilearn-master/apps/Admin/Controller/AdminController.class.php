<?php 
namespace Admin\Controller;
use Think\Controller;

class AdminController extends CommonController
{
	
//查看所有用户
	public function alluser(){
		//$this->isadmin();
		$user = D('user');
		$data =$user->alluser();
		$this->assign('alluser',$data);
		$this->display();
	}

//删除单个用户
	public function deloneuser(){
		//$this->isadmin();
		$user = D('user');
		$id = I('get.id');
		$rs = $user->deloneuser($id);//获取了一个删除记录数
		$msg0 = '删除失败';
		$msg1 = '删除成功';
		$url='../admin/alluser';
		$this->issuccess($rs,$msg0,$msg1,$url);
	}

//查看所有管理员
	public function alladmin(){
		//$this->isadmin();
		$admin = D('admin');
		$rs = $admin ->alladmin();
		$this->assign('alladmin',$rs);
		$this->display();
	}



//添加管理员
	public function newoneadmin(){
		$this->display();
	}

	public function newadmin(){
		$this->isadmin();
		$admin = D('admin');
		$aname = I('post.name');
		$apwd1 = I('post.pwd1');
		$apwd2 = I('post.pwd2');
		if($aname && ($apwd1 == $apwd2))
		{
			$data = $admin->sameadmin($aname);
			if(! $data)
			{
			$apwd = $apwd2;
			$rs = $admin ->newadmin($aname,$apwd);
			}
		}
		$msg0 = '添加失败';
		$msg1 = '添加成功';
		$url='../admin/alladmin';
		$this->issuccess($rs,$msg0,$msg1,$url);
	}

//删除一个管理员
	public function deloneadmin(){
		$this->isadmin();
		$id = I('get.id');
		$admin = D('admin');
		$rs = $admin ->deloneadmin($id);
		$msg0 = '删除失败';
		$msg1 = '删除成功';
		$url='../admin/alladmin';
		$this->issuccess($rs,$msg0,$msg1,$url);

	}
	
//查看一个管理员
	public function showoneadmin(){
		
	}
	
	public function logout(){
		
	}



}