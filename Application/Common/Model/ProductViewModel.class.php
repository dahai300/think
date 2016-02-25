<?php
namespace Common\Model;
use Think\Model\ViewModel;

class ProductViewModel extends ViewModel{

	Protected $viewFields=array(
		'products'=>array(
			'id','name','photo','istop','time','cid','summary',
			'_type'=>'LEFT'
			),
		'pcate'=>array(
			'cname','_on'=>'products.cid=pcate.id'
			)
	);
}

?>