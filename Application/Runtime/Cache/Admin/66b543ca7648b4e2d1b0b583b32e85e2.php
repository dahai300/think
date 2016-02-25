<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style type="text/css">
		.welcome{ width: 96%; height: 16px;  line-height: 16px; background: #f5f5f5; border:1px solid #ddd; margin: 120px auto; color: #777; font-family: "microsoft yahei"; text-indent: 20px; font-size: 16px; padding: 22px 0}
		.welcome i{ font-size: 12px; color: #999}
		.welcome b{ font-size: 12px; color: #888; font-weight: normal;}
	</style>
</head>
<body>
	<div class="welcome">
		<em><img src="/Public/admin/assets/img/yes.gif" ></em>&nbsp;欢迎使用网站管理系统&nbsp;&nbsp;&nbsp;&nbsp;<b>上次登录时间：<?php echo ($logintime); ?></b>&nbsp;&nbsp;&nbsp;&nbsp;<i>系统信息:<?php echo ($software); ?></i>
	</div>
</body>
</html>