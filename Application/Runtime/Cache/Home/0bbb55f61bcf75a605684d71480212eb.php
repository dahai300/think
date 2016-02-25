<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>惠州市盈佳农业发展有限公司</title>
<meta name="keywords" content="玉米，甜玉米，新鲜水果,惠州00" />
<meta name="description" content="惠州市盈佳农业发展有限公司，玉米，甜玉米，新鲜水果" />
<link rel="stylesheet" type="text/css" href="/hzyj/Public/css/style.css" />
<script type="text/javascript" src="/hzyj/Public/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="header">
	<h1 class="logo"><a href="/hzyj/Home" id="logo" title="惠州市盈佳农业有限公司"></a></h1>
	<div class="navigation">
		<ul class="nav">
			<li><a href="/hzyj/Home">首页</a></li>     
			<li>
				<a href="javascript:;">关于盈佳</a>
				 <ul class="nav-sub">
					<li><a href="<?php echo U('/about_1');?>">盈佳简介</a></li>
					<li><a href="<?php echo U('/articles_50');?>">盈佳大事记</a></li>
					<li><a href="<?php echo U('/articles_51');?>">媒体报导</a></li>
					<li><a href="<?php echo U('/articles_52');?>">成员动态</a></li>
					<li><a href="<?php echo U('/contact_2');?>">联系我们</a></li>
				</ul>
			</li>     
			<li>
				<a href="javascript:;">甜玉米产业信息</a>
				<ul class="nav-sub nav-sub-sp">
					<li>
						<a href="javascript:;">生产信息</a>
						<ul class="nav-sub3">
							<li><a href="<?php echo U('/articles_58');?>">种子信息</a></li>
							<li><a href="<?php echo U('/articles_59');?>">农药信息</a></li>
							<li><a href="<?php echo U('/articles_60');?>">肥料信息</a></li>
							<li><a href="<?php echo U('/articles_61');?>">田间管理信息</a></li>
						</ul>
					</li>
					<li><a href="<?php echo U('/articles_54');?>">加工信息</a></li>
					<li><a href="<?php echo U('/articles_55');?>">销售信息</a></li>
				</ul>
			</li>   
			<li><a href="#">网上商城</a></li>			
			<li><a href="<?php echo U('/sy/');?>" target="_blank">溯源系统</a></li>     				
			<li><a href="<?php echo U('/products/');?>">产品中心</a></li>      				
			<li>
				<a href="javascript:;">服务中心</a>
				<ul class="nav-sub">
					<li><a href="<?php echo U('/articles_56');?>">合作农户</a></li>
					<li><a href="<?php echo U('/articles_57');?>">合作代理商</a></li>
				</ul>
			</li>      				
			<li><a href="<?php echo U('/recruit');?>">人才招聘</a></li>
		</ul>
	</div>
</div>
 	<div class="sub-banner">
 		<a href="javascript:;" class="sub-banner-c"></a>
 	</div>
 	
	<div class="content pt30">
		<div class="c-l">
			<?php $id=$_GET['id']; ?>
<dl class="sub-l">
	<dt>关于盈佳</dt>
	<dd><a href="<?php echo U('/about_1');?>" <?php if($id == 1): ?>class="on"<?php endif; ?>>盈佳简介</a></dd>
	<dd><a href="<?php echo U('/articles_50');?>" <?php if($id == 50): ?>class="on"<?php endif; ?>>盈佳大事记</a></dd>
	<dd><a href="<?php echo U('/articles_51');?>" <?php if($id == 51): ?>class="on"<?php endif; ?>>媒体报导</a></dd>
	<dd><a href="<?php echo U('/articles_52');?>" <?php if($id == 52): ?>class="on"<?php endif; ?>>成员动态</a></dd>
	<dd><a href="<?php echo U('/contact_2');?>" <?php if($id == 2): ?>class="on"<?php endif; ?>>联系我们</a></dd>
</dl>
		</div>
		<div class="c-r">
			<h2 class="sub-r">盈佳简介<em>您的当前位置：首页 &nbsp;&gt&nbsp;关于盈佳&nbsp;&gt&nbsp;盈佳简介</em></h2>
			<div class="c-r-c d-pd">
				<?php echo ($r[0]["content"]); ?>
			</div>
		</div>
		<div class="clear"></div>
	</div>
<div class="footer">
	<div class="footer-c">
		<p>版权所有：盈佳农业发展有限公司&nbsp;&nbsp;&nbsp;&nbsp;联系电话：0752-2793323&nbsp;&nbsp;&nbsp;&nbsp;联系地址：惠州市惠城区汝湖镇仍图社区（盈佳甜玉米专业合作社）</p>
		<p>技术支持：<a href="http://www.gdcct.com.cn" target="_blank">广东村村通科技有限公司</a>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2000-2013 gdcct.net. All Rights Reserved&nbsp;&nbsp;粤B2-20052010号-6</p>
	</div>
</div>
 <script type="text/javascript" src="/hzyj/Public/js/jquery.nav.js"></script>
 <script type="text/javascript">
 	jQuery(".nav").nav();
 </script>
</body>
</html>