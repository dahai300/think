<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<style type="text/css">
		.table td{ padding: 12px;}
	</style>
</head>
<body>
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th colspan="5">友情链接</th>
			</tr>
		</thead>	
		  <tr>
		  	<td width="20"></td>
			<td align="center">名称</td>
			<td align="center">链接</td>
			<td align="center">排序</td>
			<td align="center">操作</td>
		  </tr>
		  <?php if(is_array($links)): foreach($links as $key=>$v): ?><tr>
			  	<td width="20"><?php echo ($key+1); ?></td>
				<td align="center"><?php echo ($v["name"]); ?></td>
				<td align="center"><?php echo ($v["link"]); ?></td>
				<td align="center"><?php echo ($v["sort"]); ?></td>
				<td align="center"><a href="<?php echo U(MODULE_NAME.'/Link/delete',array('id'=>$v['id']));?>">删除</a></td>
			  </tr><?php endforeach; endif; ?>
	</table>
</body>
</html>