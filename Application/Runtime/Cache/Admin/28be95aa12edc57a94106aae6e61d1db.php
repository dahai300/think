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
	.table td{ padding:9px 6px;}
	</style>
</head>
<body>
<div class="sdiv">
	<form action="<?php echo U(MODULE_NAME.'/Article/cateSearch');?>" method="post" id="cateForm">
		<i>按文章类别搜索：</i>
		<select name="acid" id="slNcate">
			   <?php if(is_array($acate)): foreach($acate as $key=>$vc): if($vc["id"] == $acid): ?><option value="<?php echo ($vc["id"]); ?>" selected> <?php echo ($vc["html"]); echo ($vc["cname"]); ?></option>
			 	 	<?php else: ?>
			 	 		<option value="<?php echo ($vc["id"]); ?>"> <?php echo ($vc["html"]); echo ($vc["cname"]); ?></option><?php endif; endforeach; endif; ?>
		</select>
		<input type="submit" value="搜索" />
	</form>
</div>
<div class="sdiv">
	<form action="<?php echo U(MODULE_NAME.'/Article/titleSearch');?>" method="post" id="stitleForm">
		<i>按文章标题搜索：</i>
		<input type="text" name="keywords" ng-model="keywords" />
		<input type="submit" value="搜索" />
	</form>
</div>
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th colspan="5">文章列表</th>
			</tr>
		</thead>	
		  <tr>
			<td align="center" width="40"></td>
			<td align="center"><strong>标题</strong></td>
			<td align="center" width="110"><strong>文章类别</strong></td>
			<td align="center" width="110"><strong>发布时间</strong></td>
			<td align="center" width="45"><strong>操作</strong></td>
		  </tr>
		  <?php if(is_array($articles)): foreach($articles as $key=>$v): ?><tr>
			  	<td style="text-align:center;"><?php echo ($key+1); ?></td>
			  	<td ><?php echo ($v["title"]); ?></td>
			  	<td align="center" width="10%" ><?php echo ($v["cname"]); ?></td>
			  	<td width="10%" align="center"><?php echo (date('Y-m-d',$v["time"])); ?></td>
			  	<td width="10%" align="center">
			  	[<a href='<?php echo U(MODULE_NAME."/Article/editArticle",array('id'=>$v['id']));?>'>编辑</a>]
			  	[<a href='<?php echo U(MODULE_NAME."/Article/articleDelete",array('id'=>$v['id']));?>'>删除</a>]</td>
			  </tr><?php endforeach; endif; ?>
		  <!-- <tr>
		  	<td colspan="6" align="left" style="padding-top:15px;">
		  				<div class="page"><?php echo ($page); ?></div>
		  	</td>
		  </tr> -->
	</table>
</body>
</html>