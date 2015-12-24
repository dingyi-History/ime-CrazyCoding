<?php 
namespace Admin\Model;
use Think\Model;

class UserModel extends Model
{
	//查询所有用户
	public function alluser(){
		$user = M('user');
		$data = $user->select();
		return $data;
	}


	public function deloneuser($id){
		$User = M("User"); // 实例化User对象
		$num = $User->where("id='$id'")->delete(); // 删除对应id的用户数据,返回删除的记录数
		return $num;
	}
}