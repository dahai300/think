<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>单页文章分类列表</title>
	<link type="text/css" rel="stylesheet" href="/hzyj/Public/admin/css/index.css" />
	<script type="text/javascript" src="/hzyj/Public/admin/js/jquery-1.11.1.min.js"></script>
</head>
<body>
	
<table width="95%" border="0" cellspacing="0" cellpadding="0" class="table">
		<tr>
			<th colspan="3">单页文章分类列表</th>
		</tr>
	  <tr>
		<td width="5%">ID</td>
		<td>名称</td>
		<!-- <td>级别</td> -->
		<td>操作</td>
	  </tr>
	  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><tr>
		     <td><?php echo ($v["id"]); ?></td>
		     <td><?php echo ($v["html"]); echo ($v["dname"]); ?></td>
		     <!-- <td><?php echo ($v["level"]); ?></td> -->
		     <td>
		     <a href="<?php echo U(MODULE_NAME.'/Danye/addCate',array('pid'=>$v['id']));?>">[添加子分类]</a>&nbsp;<a href="<?php echo U(MODULE_NAME.'/Danye/delete',array('id'=>$v['id']));?>">[删除]</a>
		     </td>
		  </tr><?php endforeach; endif; ?> 
</table>
</body>
</html>