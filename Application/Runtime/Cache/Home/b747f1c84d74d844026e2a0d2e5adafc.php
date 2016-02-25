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
		<li><a href="#">首页</a></li>
		<li><a href="#">关于我们</a></li>
		<li><a href="#">企业文化</a></li>
		<li><a href="#">寻猎流程</a></li>
		<li><a href="#">猎头招人优势</a></li>
		<li><a href="#">招贤纳士</a></li>
		<li><a href="#">猎头职位</a></li>
		<li><a href="#">千里马档案</a></li>
		<li><a href="#" class="last">联系我们</a></li>
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
		<div class="sub-left">
	<h2 class="sub-ltitle">栏目导航</h2>
	<ul class="sub-lul">
		<li><a href="<?php echo U('/aboutus/');?>">关于我们</a></li>
		<li><a href="<?php echo U('/culture/');?>">企业文化</a></li>
		<li><a href="<?php echo U('/xlsteps/');?>">寻猎流程</a></li>
		<li><a href="<?php echo U('/advantage/');?>">猎头招人优势</a></li>
		<li><a href="<?php echo U('/recruit/');?>">招贤纳士</a></li>
		<li><a href="<?php echo U('/contactus/');?>">联系我们</a></li>
	</ul>
</div>
		<div class="sub-right">
			<h2 class="sub-rtitle">招贤纳士</h2>
			<div class="sub-rc yahei" id="aboutus">
				<p>公司聘用理念：有德有才者重用之，有德无才者培养之，有才无德者限制用，无德无才者坚决不用。如果您是有德之士，特别又是有才之人，这里就是助您圆梦的好平台！</p>

				<p>在千唯仕，我们提倡人人都能开分公司！</p>

				<p>公司提倡正能量！在我们公司，我们重用有正能量之才人！</p>

				<p>厚德载物，有容乃大！</p>

				<p>招聘专业猎头顾问，有猎头工作经验，英语流利者优先录取。高提成高奖金，等您来挑战！</p>

				<p>有意者，请发简历到邮箱：hr@trivisit.com</p>
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
<script type="text/javascript">
	jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"fold",mouseOverStop:false,interTime:6000});
</script>
<script type="text/javascript" src="/qws/Public/js/navstyle.js"></script>
<script type="text/javascript">
	navStyle(4);
</script>
</body>
</html>