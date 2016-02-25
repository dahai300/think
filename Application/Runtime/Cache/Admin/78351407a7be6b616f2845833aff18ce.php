<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章列表</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<style type="text/css">
		.table td{ padding: 12px;}
	</style>
</head>
<body>
<table  class="table table-bordered table-hover definewidth m10">
	<thead>
		<tr>
			<th colspan="3">单页文章列表</th>
		</tr>
		</thead>
	  <tr>
		<td align="center" width="45"><strong>ID</strong></td>
		<td><strong>类别</strong></td>
		<td><strong>操作</strong></td>
	  </tr>
	  <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><tr>
		  	<td style="text-align:center;"><?php echo ($key+1); ?></td>
		  	<td ><a href='<?php echo U(MODULE_NAME."/Danye/editArticle",array('id'=>$v['id'],'did'=>$v['did']));?>'><?php echo ($v["dname"]); ?></a></td>
		  	<td>
			  	<a href='<?php echo U(MODULE_NAME."/Danye/editArticle",array('id'=>$v['id'],'did'=>$v['did']));?>'>编辑</a>
			  	<!-- [<a href='<?php echo U(MODULE_NAME."/Danye/articleDelete",array('id'=>$v['id']));?>'>删除</a>] -->
		  	</td>
		  </tr><?php endforeach; endif; ?>
</table>
</body>
</html>