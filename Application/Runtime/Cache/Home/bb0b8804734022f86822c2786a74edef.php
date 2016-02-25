<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广州千唯仕企业管理咨询有限公司</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link rel="stylesheet" type="text/css" href="/qws/Public/css/style.css" />
<script type="text/javascript" src="/qws/Public/js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="header">
	<div class="header-c">
		<h1 class="logo"><a href="/" id="logo" title=""></a></h1>
		<span class="toptel"></span>
	</div>
</div>
<div class="navigation">
	<ul class="nav">
		<li><a href="/qws/Home">首页</a></li>
		<li><a href="<?php echo U('/aboutus/');?>">关于我们</a></li>
		<li><a href="<?php echo U('/culture/');?>">企业文化</a></li>
		<li><a href="<?php echo U('/xlsteps/');?>">寻猎流程</a></li>
		<li><a href="<?php echo U('/advantage/');?>">猎头招人优势</a></li>
		<li><a href="<?php echo U('/myrecruit/');?>">招贤纳士</a></li>
		<li><a href="<?php echo U('/recruit/');?>">猎头职位</a></li>
		<li><a href="<?php echo U('/resumer/');?>">千里马档案</a></li>
		<li><a href="<?php echo U('/contactus/');?>" class="end last">联系我们</a></li>
	</ul>
</div>
<div id="slideBox" class="slideBox">
	<div class="hd">
		<ul><li></li><li></li><li></li><li></li></ul>
	</div>
	<div class="bd">
		<ul>
			<?php
 if(!$jdts=S('jdt')){ $jdts=M('jdt')->order("id ASC")->select(); S('jdt',$jdts,3600*24); } foreach($jdts as $v): ?><li><a href="javascript:;" style='background:url(/qws/Data/Uploads/<?php echo ($v["img"]); ?>) center 0 no-repeat;'></a></li><?php endforeach; ?>
		</ul>
	</div>
</div>
	<div class="content">
		<div class="content-c pd40">
		<h2 class="sub-rtitle">千里马档案库</h2>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="res-tb">
			<thead>
				<tr>
					<th width="50" style="text-align:center;">编号</th>
					<th width="10%">姓名</th>
					<th width="40"  style="text-align:center;">性别</th>
					<th>应聘职位</th>
				</tr>
			</thead>
			<?php if(is_array($resumers)): foreach($resumers as $key=>$v): ?><tr>
			    <td align="center"><a href="<?php echo U('/resumer/',array('id'=><?php echo ($v["id;?>))"]); ?>" target="_blank"><?php echo ($v["id"]); ?></a></td>
			    <td><a href="<?php echo U('/resumer/',array('id'=><?php echo ($v["id;?>))"]); ?>" target="_blank"><?php echo ($v["name"]); ?></a></td>
			    <td align="center"><?php echo ($v["sex"]); ?></td>
			    <td><?php echo ($v["tobe"]); ?></td>
			  </tr><?php endforeach; endif; ?>
		  </table>
		  <div class="d-pagination">
			<div class="pagination-pages">
			<?php echo ($page); ?>
			</div>
		</div>
		</div>
	</div>
<div class="footer">
	<div class="footer-c">
		<p>联系电话：+8620 3424 8656&nbsp;&nbsp;&nbsp;&nbsp;电子邮箱：hr@trivisit.com</p>
		<p>Copyright ©2015-2017 www.trivisit.com All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;粤B2-200555552010号-6</p>
	</div>
</div>
<script type="text/javascript" src="/qws/Public/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/qws/Public/js/navstyle.js"></script>
<script type="text/javascript">
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"fold",mouseOverStop:false,interTime:6000});
</script>
</body>
</html>