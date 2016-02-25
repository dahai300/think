<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>添加单页文章分类</title>
	<link type="text/css" rel="stylesheet" href="/hzyj/Public/admin/css/index.css" />
	<script type="text/javascript" src="/hzyj/Public/admin/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
	$(function(){
		$("#cateForm").submit(function(){
			var name=$("input[name='dname']")
			if(name.val().trim()==''){
				name.parent().find("span").remove().end().append("<span class='error'>不能为空</span>");
		 		return false;
			}
	 
		})
	})
</script>
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Danye/addCateHandle');?>" method="post" id="cateForm">
		<table width="100%" border="0" cellspacing="0" cellpadding="0" class="table">
				<tr>
					<th colspan="2">添加单页文章分类</th>
				</tr>
			  <tr>
				<td align="right" width="100">名称：</td>
				<td><input name="dname" type="text"  /></td>
			  </tr>
			 <tr>
			    <td><input type="hidden" name="pid" value="<?php echo ($pid); ?>"></td>
			    <td><input type="submit" value="保存添加" /></td>
			  </tr>
		</table>
	</form>
</body>
</html>