<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>产品添加</title>
	<link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/style.css" />
	<link href="/qws/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/qws/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <link href="/qws/Public/admin/assets/css/page-min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
		input.calendar {width: 90px;}
		.table{ width: 96%;}
    </style>
    <script type="text/javascript" src="/qws/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/qws/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%';
			window.UEDITOR_CONFIG.initialFrameHeight='300';
			window.UEDITOR_CONFIG.compressSide=1;
			window.UEDITOR_CONFIG.maxImageSideLength=1000;
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
	</script>
	<script type="text/javascript" src="/qws/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/qws/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<form action="" method="post" id="productForm" name="productForm" enctype="multipart/form-data">
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th colspan="2">产品添加</th>
				</tr>
			</thead>
				<!-- <tr>
					<td align="right" width="10%">所属分类：</td>
					<td align="left">
						<select name="cid" id="slCate">
						  <option value="0">==请选择分类==</option>
						  <?php if(is_array($cate)): foreach($cate as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["html"]); echo ($v["cname"]); ?></option><?php endforeach; endif; ?>
						</select>
					</td>
				</tr> -->
				<tr>
					<td align="right" width="10%">产品名称：</td>
					<td align="left"><input type="text" name="name" style="width:80%" data-rules="{required:true}" /></td>
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
					<td align="left">
			            <input name="publish_time" type="text" class="calendar" data-rules="{required:true}" value="<?php echo (date('Y-m-d',$now)); ?>">
					<!-- <input type="text" class="search-inpu-box-enter" id="st" name="publish_time" onclick="return Calendar('st');" readonly="readonly"   value="<?php echo (date('Y-m-d',$now)); ?>" /> -->

					</td>
				</tr>
			  <tr>
				<td colspan="2"><textarea name="content" id="content" data-rules="{required:true}"></textarea></td>
			  </tr>
			 <tr>
			    <td align="center" colspan="2">
			    <input type="submit" value="保存并增加另一个" onclick="addAndMore()"   class="btn btn-success" />
			    &nbsp;&nbsp;<input type="submit" value="保存" onclick="addAndSave()"   class="btn btn-primary" />
			    </td>
			  </tr>  
		</table>
</form>
<script type="text/javascript" src="/qws/Public/admin/assets/js/bui-min.js"></script>
<script type="text/javascript" src="/qws/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
  BUI.use('bui/form',function (Form) {
    var form = new Form.HForm({
      srcNode : '#productForm'
    });

    form.render();
  });
</script>
</body>
</html>