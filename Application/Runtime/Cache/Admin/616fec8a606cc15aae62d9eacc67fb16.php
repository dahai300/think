<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>文章添加</title>
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
		var addmoreUrl="<?php echo U(MODULE_NAME.'/Article/addAndMoreHandle');?>";
		var addsaveUrl="<?php echo U(MODULE_NAME.'/Article/addAndSaveHandle');?>";

		function addAndMore(){
			newsForm.action=addmoreUrl;
		}
		function addAndSave(){
			newsForm.action=addsaveUrl;
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
<form action="" method="post" id="newsForm" name="newsForm" enctype="multipart/form-data">
<table  class="table table-bordered table-hover definewidth m10">
	<thead>
		<tr>
			<th colspan="2">文章添加 </th>
		</tr>
	</thead>	
		<tr>
			<td align="right" width="10%">文章类别：</td>
			<td align="left">
				<select name="acid" id="slNcate" >
					  <option value="0">==请选择分类==</option>
					  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
				</select>
			</td>
		</tr>
		<tr>
			<td align="right" width="10%">标题：</td>
			<td align="left"><input type="text" name="title" style="width:80%" data-rules="{required:true}"  /></td>
		</tr>
		<tr>
			<td align="right">摘要：</td>
			<td align="left"><input type="text" name="brief" style="width:80%" /></td>
		</tr>
		<tr>
			<td align="right">缩略图：</td>
			<td align="left"><input name="image" type="file" style="border:none" /></td>
		</tr>
		<tr>
			<td align="right">发布时间：</td>
			<td align="left">
			<input name="publish_time" type="text" class="calendar" data-rules="{required:true}" value="<?php echo (date('Y-m-d',$now)); ?>">
			<!-- <input type="text" class="search-inpu-box-enter" id="st" name="publish_time" onclick="return Calendar('st');" value="<?php echo (date('Y-m-d',$now)); ?>" /> -->
			</td>
		</tr>
	  <tr>
		<td colspan="2"><textarea name="content" id="content" data-rules="{required:true}" ></textarea></td>
	  </tr>
	 <tr>
	    <td align="center" colspan="2"><input type="submit" value="保存并增加另一个" onclick="addAndMore()" class="btn btn-success" />&nbsp;&nbsp;<input type="submit" value="保存" onclick="addAndSave()" class="btn btn-primary" /></td>
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