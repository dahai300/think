<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品添加</title>
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
		var addmoreUrl="<?php echo U(MODULE_NAME.'/Product/addProHandle2');?>";
		var addsaveUrl="<?php echo U(MODULE_NAME.'/Product/addProHandle');?>";

		function addAndMore(){
			productForm.action=addmoreUrl;
		}
		function addAndSave(){
			productForm.action=addsaveUrl;
		}
		$(function(){
				var title=$("input[name='name']");
				var content=$("textarea[name='content']");
				var slcate=$("#slCate"),slSpec=$("#slSpec");
				$("#productForm").submit(function(){
					
					if($("#slCate").find("option:selected").text().trim()=='==请选择分类=='){
						slcate.parent().find("span").remove().end().append("<span class='error'>请选择分类</span>");
				 		return false;
					}
					if(title.val().trim()==''){
						title.parent().find("span").remove().end().append("<span class='error'>标题不能为空</span>");
				 		return false;
					}
					if(content.val().trim()==''){
						content.parent().find("span").remove().end().prepend("<span class='error'>内容不能为空</span>");
				 		return false;
					}
				})
				slcate.change(function(){
					$(this).parent().find("span").remove("span");
				});
				title.focus(function(){
					$(this).parent().find("span").remove("span");
				});
				content.focus(function(){
					$(this).parent().find("span").remove("span");
				});
			})
	</script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript" src="/hzyj/Public/admin/js/showdate.js"></script>
	<script type="text/javascript" src="/hzyj/Public/admin/js/index.js"></script>
</head>
<body>
<form action="" method="post" id="productForm" name="productForm" enctype="multipart/form-data">
		<table width="95%" border="0" cellspacing="0" cellpadding="0" class="table">
				<tr>
					<th colspan="2">产品添加</th>
				</tr>
				<tr>
					<td align="right" width="10%">所属分类：</td>
					<td align="left">
						<select name="cid" id="slCate">
						  <option value="0">==请选择分类==</option>
						  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr>
				<tr>
					<td align="right" width="10%">产品名称：</td>
					<td align="left"><input type="text" name="name" style="width:80%"  /></td>
				</tr>
				<tr>
					<td align="right" width="10%">产品图片:</td>
					<td align="left"><input name="image" type="file" style="border:0" /></td>
				</tr>
				<!-- <tr>
					<td align="right"></td>
					<td align="left"><input type="checkbox" name="istop" value="1" />推荐</td>
				</tr>
				<tr>
					<td align="right">摘要：</td>
					<td align="left"><input type="text" name="summary" style="width:80%" /></td>
				</tr>
				<tr>
					<td align="right">来源：</td>
					<td align="left"><input type="text" name="froms" value="xx公司" /></td>
				</tr> -->
				<tr>
					<td align="right">发布时间：</td>
					<td align="left"><input type="text" class="search-inpu-box-enter" id="st" name="publish_time" onclick="return Calendar('st');" readonly="readonly"   value="<?php echo (date('Y-m-d',$now)); ?>" /></td>
				</tr>
			  <tr>
				<td colspan="2"><textarea name="content" id="content"></textarea></td>
			  </tr>
			 <tr>
			    <td align="center" colspan="2">
			    <input type="submit" value="保存并增加另一个" onclick="addAndMore()" />
			    &nbsp;&nbsp;<input type="submit" value="保存" onclick="addAndSave()" />
			    </td>
			  </tr>  
		</table>
</form>
</body>
</html>