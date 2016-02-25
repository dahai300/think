<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>职位添加</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/style.css" />
	<link href="/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
		input.calendar {width: 90px;}
		.table{ width: 96%;}
		.table .tdr{ text-align: right;}
    </style>
    <script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%';
			window.UEDITOR_CONFIG.initialFrameHeight='300';
			window.UEDITOR_CONFIG.compressSide=1;
			window.UEDITOR_CONFIG.maxImageSideLength=1000;
			UE.getEditor('content');
		}
	</script>
	<script type="text/javascript" src="/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<form action="<?php echo U(MODULE_NAME.'/Recruit/editHandle');?>"  method="post" id="recruitForm" name="recruitForm">
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th colspan="2">职位编辑/th>
				</tr>
			</thead>
				<tr>
					<td class="tdr" width="10%">职位名称：<input type="hidden" value="<?php echo ($id); ?>" name="id" /></td>
					<td align="left"><input type="text" name="title" style="width:40%" data-rules="{required:true}" value="<?php echo ($getone["title"]); ?>"  /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">工作地点：</td>
					<td align="left"><input type="text" name="address" style="width:40%" value="<?php echo ($getone["address"]); ?>"  /></td>
				</tr>
				<tr>
					<td class="tdr"  width="10%">薪酬：</td>
					<td align="left"><input type="text" name="salary" style="width:40%" value="<?php echo ($getone["salary"]); ?>"  /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">邮箱：</td>
					<td align="left"><input type="email" name="email" style="width:40%"  data-rules="{required:true}"  value="<?php echo ($getone["email"]); ?>"  /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">联系人：</td>
					<td align="left"><input type="text" name="contacter" style="width:40%"  data-rules="{required:true}" value="<?php echo ($getone["contacter"]); ?>"   /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">联系电话：</td>
					<td align="left"><input type="text" name="contacttel" style="width:40%"  data-rules="{required:true}"  value="<?php echo ($getone["contacttel"]); ?>"  /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">公司性质：</td>
					<td align="left">
						<select name="cotype"   data-rules="{required:true}" >
							<option value="<?php echo ($getone["cotype"]); ?>" selected=""><?php echo ($getone["cotype"]); ?></option>
							<option value="外资(欧美)">外资(欧美)</option>
							<option value="外资(非欧美)">外资(非欧美)</option>
							<option value="合资">合资</option>
							<option value="国企">国企</option>
							<option value="民营公司">民营公司</option>
							<option value="国内上市公司">国内上市公司</option>
							<option value="外企代表处">外企代表处</option>
							<option value="政府机关">政府机关</option>
							<option value="事业单位">事业单位</option>
							<option value="非营利机构">非营利机构</option>
							<option value="其它性质">其它性质</option>
						</select>
					</td>
				</tr>
				<tr>
					<td class="tdr" >发布时间：</td>
					<td align="left">
			            <input name="time" type="text" class="calendar" data-rules="{required:true}"  value="<?php echo (date('Y-m-d',$getone["time"])); ?>">
					</td>
				</tr>
			  <tr>
			  <td class="tdr" >职位描述</td>
				<td><textarea name="content" id="content" data-rules="{required:true}"><?php echo ($getone["content"]); ?></textarea></td>
			  </tr>
			 <tr>
			 <td></td>
			    <td>
			 	<input type="submit" value="保存" class="btn btn-primary" />
			    </td>
			    
			  </tr>  
		</table>
</form>
<script type="text/javascript" src="/Public/admin/assets/js/bui-min.js"></script>
<script type="text/javascript" src="/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
  BUI.use('bui/form',function (Form) {
    var form = new Form.HForm({
      srcNode : '#recruitForm'
    });
    form.render();
  });
</script>
</body>
</html>