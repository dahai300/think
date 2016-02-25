<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章编辑</title>
	<link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/hzyj/Public/admin/Css/style.css" />
    <link href="/hzyj/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/hzyj/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="/hzyj/Public/admin/assets/css/page-min.css" rel="stylesheet" type="text/css" />
   <style type="text/css">
		input.calendar {width: 90px;}
		.table{ width: 96%;}
    </style>
    <script type="text/javascript" src="/hzyj/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/hzyj/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%';
			window.UEDITOR_CONFIG.initialFrameHeight='300';
			window.UEDITOR_CONFIG.compressSide=1;
			window.UEDITOR_CONFIG.maxImageSideLength=1000;
			UE.getEditor('content');
		}
		$(function(){
		var slcate=$("#slNcate");
		$("#newsForm").submit(function(){
			if(slcate.find("option:selected").text().trim()=='==请选择分类=='){
				slcate.parent().find("span").remove().end().append("<span class='error'>请选择分类</span>");
		 		return false;
			}
		})
		slcate.change(function(){$(this).parent().find("span").remove("span");});
	})
	</script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/hzyj/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Article/editArticleHandle');?>" method="post" id="newsForm"  enctype="multipart/form-data">
<table class="table table-bordered table-hover definewidth m10">
		<tr>
			<th colspan="2">文章修改</th>
		</tr>	
		<tr>
			<td align="right" width="10%">文章类别：</td>
			<td align="left">
				<select name="acid" id="slNcate">
				  <option value="0">==请选择分类==</option>
				  <?php if(is_array($acate)): foreach($acate as $key=>$v): if($v["id"] == $getone["acid"]): ?><option value="<?php echo ($v["id"]); ?>" selected><?php echo ($v["html"]); echo ($v["cname"]); ?></option>
				 	 	<?php else: ?>
				 	 		<option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endif; endforeach; endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right" width="10%">标题：<input type="hidden" name="id" value="<?php echo ($id); ?>"></td>
			<td align="left"><input type="text" name="title" value="<?php echo ($getone["title"]); ?>" style="width:80%"  data-rules="{required:true}"  /></td>
		</tr>
		<tr>
			<td align="right">摘要：</td>
			<td align="left"><input type="text" name="brief" style="width:80%" value="<?php echo ($getone["brief"]); ?>" /></td>
		</tr>
		<tr>
			<td align="right">缩略图：</td>
			<td align="left"><input name="image" type="file" style="border:none" /></td>
		</tr>
		<!-- <tr>
			<td align="right"></td>
			<td align="left"><input type="checkbox" name="istop" value="1" id="istop" <?php if($getone["istop"] == 1): ?>checked<?php endif; ?> />置顶<span id='istopSpan'  <?php if($getone["istop"] == 1): ?>style='display:block;' <?php else: ?>style='display:none;'<?php endif; ?>><input name="image" type="file" />(缩略图)</span></td>
		</tr>
		<tr>
			<td align="right">发布者：</td>
			<td align="left"><input type="text" name="publisher" value="<?php echo ($getone["publisher"]); ?>" /></td>
		</tr>
		<tr>
			<td align="right">来源：</td>
			<td align="left"><input type="text" name="froms" value="<?php echo ($getone["froms"]); ?>" /></td>
		</tr> -->
		<tr>
			<td align="right">发布时间：</td>
			<td align="left">
			<input name="publish_time" type="text" class="calendar" data-rules="{required:true}" value="<?php echo (date("Y-m-d",$getone["time"])); ?>" >
			<!-- 	<input type="text" class="search-inpu-box-enter" id="st" name="publish_time" onclick="return Calendar('st');" value="<?php echo (date("Y-m-d",$getone["time"])); ?>"  readonly="readonly"  /> -->
			</td>
		</tr>
	  <tr>
		<td colspan="2"><textarea name="content" id="content"  data-rules="{required:true}" ><?php echo ($getone["content"]); ?></textarea></td>
	  </tr>
	 <tr>
	    <td align="center" colspan="2"><input type="submit" value="保 存" class="btn btn-success" /></td>
	  </tr>  
</table>
</form>
<script type="text/javascript" src="/hzyj/Public/admin/assets/js/bui-min.js"></script>
<script type="text/javascript" src="/hzyj/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
  BUI.use('bui/form',function (Form) {
    var form = new Form.HForm({
      srcNode : '#newsForm'
    });

    form.render();
  });
</script>
</body>
</html>