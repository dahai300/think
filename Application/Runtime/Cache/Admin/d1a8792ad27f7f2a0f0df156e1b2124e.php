<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reset</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		$(function(){
			var name=$("input[name='name']");
			var www=$("input[name='www']");
			$("#flinksForm").submit(function(){
				
				if($.trim(name.val())==''){
					name.parent().find("span").remove().end().append("<span class='error'>名称不能为空</span>");
			 		return false;
				}
				if($.trim(www.val())==''){
					www.parent().find("span").remove().end().append("<span class='error'>网址不能为空</span>");
			 		return false;
				}
		 
			})
			name.focus(function(){$(this).parent().find("span").remove("span");});
			www.focus(function(){$(this).parent().find("span").remove("span");});
		})
</script>
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Link/addHandle');?>" method="post" id="flinksForm">
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th colspan="2">友情链接</th>
				</tr>
			</thead>	
			  <tr>
				<td align="right" width="205">名称：</td>
				<td><input name="name" type="text" /></td>
			  </tr>
			  <tr>
				<td align="right" width="">链接网址：</td>
				<td><input name="www" type="text" />&nbsp;(格式：http://www.baidu.com)</td>
			  </tr>
			  <tr>
				<td align="right" width="">排序：</td>
				<td><input name="sort" type="text" value="1" /></td>
			  </tr>
			 <tr>
			    <td>&nbsp;</td>
			    <td><input type="submit" value="添加" class="btn btn-success" /></td>
			  </tr>
			   
		</table>
</form>
</body>
</html>