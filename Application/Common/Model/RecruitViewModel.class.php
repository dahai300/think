<?php
namespace Common\Model;
use Think\Model\ViewModel;

class RecruitViewModel extends ViewModel{

	Protected $viewFields=array(
		'apply'=>array(
			'id','recruitid','attachs','time',
			'_type'=>'LEFT'
			),
		'recruit'=>array(
			'title','_on'=>'apply.recruitid=recruit.id'
			)
	);
}

?>