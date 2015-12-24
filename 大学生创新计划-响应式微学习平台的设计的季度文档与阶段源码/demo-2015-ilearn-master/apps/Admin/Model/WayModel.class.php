<?php 
namespace Admin\Model;
use Think\Model;

class WayModel extends Model
{
	public function allway(){
		$way = M('way');
		$data = $way ->select();
		return $data;
	}
}