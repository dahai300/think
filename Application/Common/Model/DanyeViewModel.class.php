<?php
namespace Common\Model;
use Think\Model\ViewModel;

class DanyeViewModel extends ViewModel{
	
	Protected $viewFields=array(
		'danye'=>array(
			'id','did','summary','content',
			'_type'=>'LEFT'
			),
		'dcate'=>array(
			'dname','_on'=>'danye.did=dcate.id'
			)
	);
}

?>