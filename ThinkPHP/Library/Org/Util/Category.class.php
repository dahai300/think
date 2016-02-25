<?php
namespace Org\Util;
Class Category{

	Static Public function unlimitedForLevel($cate,$html='——',$pid=0,$level=0){
		$arr=array();
		foreach($cate as $v){
			if($v['pid']==$pid){
				$v['level']=$level+1;
				$v['html']=str_repeat($html,$level);
				$arr[]=$v;
				$arr=array_merge($arr,self::unlimitedForLevel($cate,$html,$v['id'],$level+1));
			}
		}
		return $arr;
	}

	//传递一个子类ID返回所有的父级分类
	Static Public function getParents($cate,$id){
		$arr=array();
		foreach($cate as $v){
			if($v['id']==$id){
				$arr[]=$v;
				$arr=array_merge(self::getParents($cate,$v['pid']),$arr);
			}
		}
		return $arr;
	}

	//传递一个子分类ID返回他的同级分类
	static public function getSameCate($cate, $id) {
		$arr = array();
		$self = self::getSelf($cate, $id);
		if (empty($self)) {
			return $arr;
		}

		foreach ($cate as $v) {
			if ($v['id'] == $self[pid]) {
				$arr[] = $v;
			}
		}
		return $arr;
	}



	//判断分类是否有子分类,返回false,true
	static public function hasChild($cate, $id) {
		$arr = false;
		foreach ($cate as $v) {
			if ($v['pid'] == $id) {
				$arr = true;
				return $arr;
			}
		}

		return $arr;
	}

	//传递一个父级分类ID返回所有子分类ID
	/**
	*@param $cate 全部分类数组
	*@param $pid 父级ID
	*@param $flag 是否包括父级自己的ID，默认不包括
	**/
	static public function getChildsId($cate, $pid, $flag = 0) {
		$arr = array();
		if ($flag) {
			$arr[] = $pid;
		}
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$arr[] = $v['id'];
				$arr = array_merge($arr , self::getChildsId($cate, $v['id']));
			}
		}

		return $arr;
	}

	//传递一个父级分类ID返回所有子级分类
	static public function getChilds($cate, $pid) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['pid'] == $pid) {
				$arr[] = $v;
				$arr = array_merge($arr, self::getChilds($cate, $v['id']));
			}
		}
		return $arr;
	}

	//传递一个分类ID返回该分类相当信息
	static public function getSelf($cate, $id) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['id'] == $id) {
				$arr = $v;
				return $arr;
			}
		}
		return $arr;
	}

	//传递一个分类ID返回该分类相当信息
	static public function getSelfByEName($cate, $ename) {
		$arr = array();
		foreach ($cate as $v) {
			if ($v['ename'] == $ename) {
				$arr = $v;
				return $arr;
			}
		}
		return $arr;
	}

 


}

?>