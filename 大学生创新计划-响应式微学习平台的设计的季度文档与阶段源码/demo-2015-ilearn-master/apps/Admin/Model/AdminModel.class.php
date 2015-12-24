<?php 
	namespace Admin\Model;
	use Think\Model;

	class AdminModel extends Model
	{

	
		public function adminlogin($aname,$apwd){
			$admin = M('admin');
			$data = $admin->where("aname='$aname' AND apwd = '$apwd'")->select();
			return $data;
		}


		public function alladmin(){
			$admin = M('admin');
			$data = $admin->select();
			return $data;
		}

		public function sameadmin($name){
			$admin = M('admin');
			$data = $admin ->where("aname = '$name'")->find();
			return $data;
		}


		public function newadmin($name,$pwd){
			$admin = M('admin');
			$data = array(
					'aname' =>"$name",
					'apwd' =>"$pwd"
				);
			$rs = $admin->add($data);
			return $rs;
		}

		public function deloneadmin($id){
			$admin = M('admin');
			$data = $admin ->where("id = '$id'")->delete();
			return $data;
		}


	}



 ?>