<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>reset</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <style type="text/css">
        body {
            padding-bottom: 40px;
        }
        .sidebar-nav {
            padding: 9px 0;
        }

        @media (max-width: 980px) {
            /* Enable use of floated navbar text */
            .navbar-text.pull-right {
                float: none;
                padding-left: 5px;
                padding-right: 5px;
            }
        }
    </style>
</head>
<body>
	<form action="<?php echo U(MODULE_NAME.'/Public/updateReset');?>" method="post">
		<table class="table table-bordered table-hover definewidth m10" >
			<thead>
				<tr>
					<th colspan="2">网站设置</th>
				</tr>
			</thead>
			  <tr>
				<td align="right" width="195" style="text-align:right">网站标题(title)：</td>
				<td><input name="title" type="text" style="width:78%" value='<?php echo ($web["title"]); ?>' /></td>
			  </tr>
			  <tr>
				<td align="right"  style="text-align:right">站点关键词(keywords)：</td>
				<td><input name="keywords" type="text" style="width:78%" value='<?php echo ($web["keywords"]); ?>' />&nbsp;(多个关键词，以逗号隔开)</td>
			  </tr>
			  <tr>
				<td align="right"  style="text-align:right">站点描述(description)：</td>
				<td><textarea name="description" id="description" rows="6" cols="4" style="width:90%;"><?php echo ($web["description"]); ?></textarea></td>
			  </tr>
			 <tr>
			 	<td></td>
			    <td><input type="submit" value="保存"  class="btn btn-success" /></td>
			  </tr>  
		</table>
</form>
</body>
</html>