<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品列表</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
</head>
<body>
<div class="sdiv">
	<form action="<?php echo U(MODULE_NAME.'/Product/cateSearch');?>" method="post" id="cateForm">
		<i>按类别搜索：</i>
		<select name="pcid" id="slNcate">
			   <?php if(is_array($cate)): foreach($cate as $key=>$vc): if($vc["id"] == $pcid): ?><option value="<?php echo ($vc["id"]); ?>" selected> <?php echo ($vc["html"]); echo ($vc["cname"]); ?></option>
			 	 	<?php else: ?>
			 	 		<option value="<?php echo ($vc["id"]); ?>"> <?php echo ($vc["html"]); echo ($vc["cname"]); ?></option><?php endif; endforeach; endif; ?>
		</select>
		<input type="submit" value="搜索" />
	</form>
</div>
<div class="sdiv">
	<form action="<?php echo U(MODULE_NAME.'/Product/titleSearch');?>" method="post" id="stitleForm">
		<i>按名称搜索：</i>
		<input type="text" name="keywords" />
		<input type="submit" value="搜索" />
	</form>
</div>
<table class="table table-bordered table-hover definewidth m10">
	<thead>
		<tr>
			<th colspan="7">产品列表</th>
		</tr>
	</thead>
	  <tr>
		<td align="center" width="45"><strong></strong></td>
		<td align="center" width="58"><strong>缩略图</strong></td>
		<td align="center"><strong>名称</strong></td>
		<td align="center" width="45"><strong>所属分类</strong></td>
		<td align="center" width="105"><strong>发布时间</strong></td>
		<td align="center" width="45"><strong>操作</strong></td>
	  </tr>
	  <?php if(is_array($products)): foreach($products as $key=>$v): ?><tr>
		  	<td width="5%" align="center"><?php echo ($key+1); ?></td>
		  	<td align="center"><img src='/hzyj/Data/Uploads/s_<?php echo ($v["photo"]); ?>' width="40" height="40" /></td>
		  	<td><?php echo ($v["name"]); ?></td>
		  	<td width="12%" align="center"><?php echo ($v["cname"]); ?></td>
		  	<td width="10%" align="center"><?php echo (date('Y-m-d',$v["time"])); ?></td>
		  	<td width="10%" align="center">[<a href='<?php echo U(MODULE_NAME."/Product/edit",array('id'=>$v['id']));?>'>编辑</a>][<a href='<?php echo U(MODULE_NAME."/Product/delete",array('id'=>$v['id']));?>'>删除</a>]</td>
		  </tr><?php endforeach; endif; ?>
	  <tr>
	  	<td colspan="8" align="left" style="padding-top:15px;">
			<div class="page"><?php echo ($page); ?></div>
	  	</td>
	  </tr>	   
</table>
</body>
</html>