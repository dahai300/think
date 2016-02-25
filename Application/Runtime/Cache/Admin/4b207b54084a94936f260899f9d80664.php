<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>人才添加</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/style.css" />
    <style type="text/css">
		input.calendar {width: 90px;}
		.table{ width: 96%;}
		.table .tdr{ text-align: right;}
    </style>
    <script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Jdt/editHandle');?>" method="post" id="JdtForm" name="JdtForm"  enctype="multipart/form-data">
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th colspan="2">幻灯片</th>
				</tr>
			</thead>
				<tr>
					<td class="tdr" width="10%">描述：<input type="hidden" value="<?php echo ($id); ?>" name="id" /></td>
					<td align="left"><input type="text" name="name" style="width:40%"  value="<?php echo ($getone["name"]); ?>"   /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">链接：</td>
					<td align="left"><input type="text" name="links" style="width:40%"  value="<?php echo ($getone["links"]); ?>"   /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">图片：</td>
					<td align="left"><input name="img" type="file" style="border:0" /></td>
				</tr>
			 <tr>
			 	<td></td>
			    <td><input type="submit" value="保存" class="btn btn-primary" />
			    </td>
			  </tr>  
		</table>
</form>
</body>
</html>