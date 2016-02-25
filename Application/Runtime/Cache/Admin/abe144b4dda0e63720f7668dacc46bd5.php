<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章编辑</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/hzyj/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%';
			window.UEDITOR_CONFIG.initialFrameHeight='300';
			UE.getEditor('content');
		}
		$(function(){
		var content=$("textarea[name='content']");
		var slcate=$("#slNcate");
		$("#newsForm").submit(function(){
			if(slcate.find("option:selected").text().trim()=='==请选择分类=='){
				slcate.parent().find("span").remove().end().append("<span class='error'>请选择分类</span>");
		 		return false;
			}
			if(content.val().trim()==''){
				content.parent().find("span").remove().end().prepend("<span class='error'>内容不能为空</span>");
		 		return false;
			}
		})
		slcate.change(function(){$(this).parent().find("span").remove("span");});
		content.focus(function(){$(this).parent().find("span").remove("span");});

	})
	</script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.all.min.js"></script>
	<style type="text/css">
		.table td{ padding: 14px;}
	</style>
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Danye/editArticleHandle');?>" method="post" id="newsForm">
<table  class="table table-bordered table-hover definewidth m10">
		<tr>
			<th colspan="2">文章修改</th>
		</tr>	
		<tr>
			<td colspan="2"><strong><?php echo ($getone["dname"]); ?></strong><input type="hidden" name="id" value="<?php echo ($id); ?>"><input type="hidden" name="did" value="<?php echo ($did); ?>"></td>
			<!--<td align="left">
				 <select name="did" id="slNcate">
				  <option value="0">==请选择分类==</option>
				  <?php if(is_array($dcate)): foreach($dcate as $key=>$v): if($v["id"] == $getone["did"]): ?><option value="<?php echo ($v["id"]); ?>" selected><?php echo ($v["dname"]); ?></option>
				 	 	<?php else: ?>
				 	 		<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["dname"]); ?></option><?php endif; endforeach; endif; ?>
				</select> 
				
			</td>-->
		</tr>
		<tr>
	  	<td width="40" style="width:40px;">摘要：</td>
		<td><input name="summary" type="text" style=" width:80%;" value="<?php echo ($getone["summary"]); ?>"  /></td>
	  </tr>
	  <tr>
		<td colspan="2"><textarea name="content" id="content"><?php echo ($getone["content"]); ?></textarea></td>
	  </tr>
	 <tr>
	 	<td></td>
	    <td><input type="submit" value="保 存" class="btn btn-success" /></td>
	  </tr>  
</table>
</form>
</body>
</html>