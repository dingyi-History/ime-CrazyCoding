<?php 
namespace Home\Model;
use Think\Model;

class UserModel extends Model {

	
//判断是否用户名已经存在
	public function samename($name)
	{
		$user = M('user');
		$rs = $user ->where("uname = '$name'") ->select();
		return $rs;
	}

//注册用户 ok
	public function adduser($name,$pwd,$email)
	{
		$user = M('user');
		$data = array(
			'uname'=> "$name",
			'upwd'=> "$pwd",
			'uemail' => "$email",
			);
		return $user->add($data);
	}


//判断登录用户名和密码是否匹配
	public function isuser($name,$pwd)
	{
		 $user = M('user');
		// 查找status值为1name值为think的用户数据 ,查询为安全需要加单引号
		$data = $user->where("uname='$name' AND upwd='$pwd'")->find();
		return $data;

	}


	//查看用户信息资料
	public function userinfo($userid){
			$user = M('user');
			$c['uid'] =$userid; 
			$data = $user->where($c)->select();
			return $data;

	}

	//修改用户资料
	public function updateuserinfo($uemail,$unickname,$uqq,$utitle,$uaddress){
		$user = M('user');
		$data = array(
			'uemail'=> "$uemail",
			'unickname'=> "$unickname",
			'uqq' => "$uqq",
			'utitle' => "$utitle",
			'uaddress' => "$uaddress",
			);
		return $user->update($data);
	}


	//修改用户密码
	public function updateuserpwd($upwd)
	{
		$user = M('user');
		$data = array(
			'upwd'=> "$upwd",
			);
		return $user->update($data);
	}
}

 ?>