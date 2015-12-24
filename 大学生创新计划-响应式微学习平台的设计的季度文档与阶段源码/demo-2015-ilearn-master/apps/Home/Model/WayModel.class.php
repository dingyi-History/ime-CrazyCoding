<?php 
namespace Home\Model;
use Think\Model;

class WayModel extends Model{

//所有互动的经验
	public function allway(){
		$way = M('way');
		$data = $way->order('wid desc')->select();
		return $data;
	}


//添加经验的业务数据模型
	public function addway($wtitle,$wcontent,$wuserid,$wdate){
		$way = M('way');
		$data = array(
			'wtitle'=> "$wtitle",
			'wcontent'=> "$wcontent",
			'wuserid' => "$wuserid",
			'wdate' => "$wdate",
			);
		return $way->add($data);
	}

}