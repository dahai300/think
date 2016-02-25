<?php
namespace Common\Model;
use Think\Model\ViewModel;

class ArticleViewModel extends ViewModel{
	
	Protected $viewFields=array(
		'article'=>array(
			'id','title','time','acid','photo','content','brief',
			'_type'=>'LEFT'
			),
		'acate'=>array(
			'cname','_on'=>'article.acid=acate.id'
			)
	);
}

?>