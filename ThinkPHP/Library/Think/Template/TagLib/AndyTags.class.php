<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
namespace Think\Template\TagLib;
use Think\Template\TagLib;
/**
 * Mycate标签库驱动
 */
class AndyTags extends TagLib{

	protected $tags   =  array(
        // 标签定义： attr 属性列表 close 是否闭合（0 或者1 默认1） alias 标签别名 level 嵌套层次
        'category'    => array('attr'=>'order','close'=>1),
        'webReset'=>array('attr'=>'name','close'=>0),
        'jdts'    => array('attr'=>'order','close'=>1)
        );

	public function _category($tag,$content) {
		$str=<<<str
<?php
	if(!\$pcate=S('pcate')){
		\$pcate=M('pcate')->order("sort {$tag['order']}")->select();
		S('pcate',\$pcate,3600);
	}
	foreach(\$pcate as \$v):
?>
str;
	$str.=$content;
	$str.='<?php endforeach; ?>';
	return $str;
	}

	public function _jdts($tag,$content) {
		$str=<<<str
<?php
	if(!\$jdts=S('jdt')){
		\$jdts=M('jdt')->order("id {$tag['order']}")->select();
		S('jdt',\$jdts,3600*24);
	}
	foreach(\$jdts as \$v):
?>
str;
	$str.=$content;
	$str.='<?php endforeach; ?>';
	return $str;
	}

	public function _webReset($tag){
		$name=$tag['name'];
		if(!$rt=S('rt')){
			$rt=M('reset')->where(array('id'=>1))->select();
			S('rt',$rt,3600*24);
		}
		return $rt[0][$name];
	}

}