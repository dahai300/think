<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>danye</title>
	<link type="text/css" rel="stylesheet" href="/hzyj/Public/admin/css/index.css" />
	<script type="text/javascript" src="/hzyj/Public/admin/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/hzyj/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%'
			window.UEDITOR_CONFIG.initialFrameHeight='300',
			window.UEDITOR_CONFIG.autoHeightEnabled=false
			UE.getEditor('content');
		}

		$(function(){
			var content=$("textarea[name='content']");
			var slcate=$("#slNcate");
			$("#danyeForm").submit(function(){
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
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Danye/addDanyeHandle');?>" method="post" id="danyeForm">
<table width="95%" border="0" cellspacing="0" cellpadding="0">
		<tr>
			<th colspan="2"></th>
		</tr>
	  <tr>
		<td align="right" width="45">分类：</td>
		<td>
			<select name="did" id="slNcate" style="height:24px; line-height:24px;">
				  <option value="0">==请选择分类==</option>
				  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["dname"]); ?></option><?php endforeach; endif; ?>
			</select>
		</td>
	  </tr>
	  <tr>
		<td align="right" width="45">内容：</td>
		<td><textarea name="content" id="content"><?php echo ($getPro["content"]); ?></textarea></td>
	  </tr>
	 <tr>
	    <td colspan="2" align="center"><input type="submit" value="添加" /></td>
	  </tr>
</table>
</form>
</body>
</html>