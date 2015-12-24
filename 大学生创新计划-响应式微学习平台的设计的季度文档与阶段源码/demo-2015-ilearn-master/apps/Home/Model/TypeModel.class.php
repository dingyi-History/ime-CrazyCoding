<?php 
namespace Home\Model;
use Think\Model;

class TypeModel extends Model
{

//根据分类ID查询分类
	public function showtype($typeid){
		$type = M('type');
		$c['id']=$typeid;
		$data = $type->where($c)->select();
		return $data;
	}

//展示所有的分类
	public function showalltype(){
		$type = M('type');
		$data = $type->select();
		return $data;
	}

}