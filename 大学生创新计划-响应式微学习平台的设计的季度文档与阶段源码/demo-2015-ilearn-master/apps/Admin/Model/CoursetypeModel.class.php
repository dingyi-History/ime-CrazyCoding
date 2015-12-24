<?php 
namespace Admin\Model;
use Think\Model;

class CoursetypeModel extends Model
{
	public function alltype(){
		$type = M('coursetype');
		$data = $type ->select();
		return $data;
	}
}