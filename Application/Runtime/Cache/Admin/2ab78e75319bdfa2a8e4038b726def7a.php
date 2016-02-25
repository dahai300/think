<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章分类列表</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<style type="text/css">
	.table td{ padding: 10px}
	</style>
</head>
<body>	
<table class="table table-bordered table-hover definewidth m10">
	<thead>
		<tr>
			<th colspan="4">文章分类列表</th>
		</tr>
	</thead>	
	  <tr>
		<td width="5%" align="center">ID</td>
		<td>名称</td>
		<td>级别</td>
		<td>操作</td>
	  </tr>
	  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
		     <td style="text-align:center;"><?php echo ($key+1); ?></td>
		     <td><?php echo ($v["html"]); echo ($v["cname"]); ?></td>
		     <td><?php echo ($v["level"]); ?></td>
		     <!-- <td><a href="<?php echo U(MODULE_NAME.'/Article/addCate',array('pid'=>$v['id']));?>">[添加子分类]</a>&nbsp;<a href="<?php echo U(MODULE_NAME.'/Article/delete',array('id'=>$v['id']));?>">[删除]</a></td> -->
		     <td></td>
		  </tr><?php endforeach; endif; ?> 
</table>
</body>
</html>