<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>人才添加</title>
	<link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/Public/admin/Css/style.css" />
	<link href="/Public/admin/assets/css/dpl-min.css" rel="stylesheet" type="text/css" />
    <link href="/Public/admin/assets/css/bui-min.css" rel="stylesheet" type="text/css" />
    <style type="text/css">
		input.calendar {width: 90px;}
		.table{ width: 96%;}
		.table .tdr{ text-align: right;}
		.sexfl{ float: left; width: 40px; font-size: 12px}
		.bui-monthpicker{ z-index: 9999}
    </style>
    <script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL='/Data/ueditor/';
		window.onload=function(){
			window.UEDITOR_CONFIG.initialFrameWidth='100%';
			window.UEDITOR_CONFIG.initialFrameHeight='200';
			window.UEDITOR_CONFIG.compressSide=1;
			window.UEDITOR_CONFIG.maxImageSideLength=1000;
			UE.getEditor('workexp');
			UE.getEditor('ability');
			UE.getEditor('education');
		}
		var addmoreUrl="<?php echo U(MODULE_NAME.'/Resumer/addMoreHandle');?>";
		var addsaveUrl="<?php echo U(MODULE_NAME.'/Resumer/addSaveHandle');?>";

		function addAndMore(){
			ResumerForm.action=addmoreUrl;
		}
		function addAndSave(){
			ResumerForm.action=addsaveUrl;
		}
	</script>
	<script type="text/javascript" src="/Data/ueditor/ueditor.config.js"></script>
	<script type="text/javascript" src="/Data/ueditor/ueditor.all.min.js"></script>
</head>
<body>
<form action="" method="post" id="ResumerForm" name="ResumerForm">
		<table class="table table-bordered table-hover definewidth m10">
			<thead>
				<tr>
					<th colspan="2">人才添加</th>
				</tr>
			</thead>
				<tr>
					<td class="tdr" width="10%">姓名：</td>
					<td align="left"><input type="text" name="name" style="width:40%" data-rules="{required:true}" /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">性别：</td>
					<td align="left">
					<label class="sexfl">
					    <input type="radio" name="sex" value="1" id="sex1" checked="" />
					    男</label>
					  <label class="sexfl">
					    <input type="radio" name="sex" value="0" id="sex0" />
					   女</label>
				   </td>
				</tr>
				<tr>
					<td class="tdr" width="10%">籍贯：</td>
					<td align="left"><input type="text" name="jiguan" style="width:40%" data-rules="{required:true}" /></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">出生日期：</td>
					<td align="left"><input name="borndate" type="text"  id="J_Month" ></td>
				</tr>
				<!-- <tr>
					<td class="tdr" width="10%">户口所在地：</td>
					<td align="left"><input type="text" name="hukouszd" style="width:40%" data-rules="{required:true}" /></td>
				</tr> -->
				<!-- <tr>
					<td class="tdr" width="10%">婚姻状况：</td>
					<td align="left">
						<label class="sexfl">
					    <input type="radio" name="marrige" value="1" id="marrige1" checked="" />
					    是</label>
					  <label class="sexfl">
					    <input type="radio" name="marrige" value="0" id="marrige0" />
					   否</label>
					</td>
				</tr> -->
				
				<tr>
					<td class="tdr" width="10%">现所在地：</td>
					<td align="left"><input type="text" name="address" style="width:40%"  /></td>
				</tr>
				 <tr>
					<td class="tdr" width="10%">职位：</td>
					<td align="left"><input type="text" name="tobe" style="width:40%" data-rules="{required:true}" /></td>
				</tr>
				<!--<tr>
					<td class="tdr" width="10%">期望薪资：</td>
					<td align="left"><input type="text" name="salary" style="width:40%" data-rules="{required:true}" /></td>
				</tr> -->
				<tr>
					<td class="tdr" width="10%">教育/培训经历：</td>
					<td align="left"><textarea name="education" id="education" data-rules="{required:true}"></textarea></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">英语与计算机能力：</td>
					<td align="left"><textarea name="ability" id="ability" data-rules="{required:true}"></textarea></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">工作经历：</td>
					<td align="left"><textarea name="workexp" id="workexp" data-rules="{required:true}"></textarea></td>
				</tr>
				<tr>
					<td class="tdr" width="10%">自我评价：</td>
					<td align="left"><textarea name="comments" id="comments" rows="8" cols="8" style="width:40%"></textarea></td>
				</tr>
				<!-- <tr>
					<td class="tdr" width="10%">上传简历：</td>
					<td align="left"><input name="attachs" type="file" style="border:0" /></td>
				</tr> -->
				<tr>
					<td class="tdr" >入库时间：</td>
					<td align="left">
			            <input name="time" type="text" class="calendar" data-rules="{required:true}" value="<?php echo (date('Y-m-d',$now)); ?>">
					</td>
				</tr>
			 <tr>
			 	<td></td>
			    <td>
			    <input type="submit" value="保存并增加另一个" onclick="addAndMore()"   class="btn btn-success" />
			    &nbsp;&nbsp;<input type="submit" value="保存" onclick="addAndSave()"   class="btn btn-primary" />
			    </td>
			  </tr>  
		</table>
</form>
<script type="text/javascript" src="/Public/admin/assets/js/bui-min.js"></script>
<script type="text/javascript" src="/Public/admin/assets/js/config-min.js"></script>
<script type="text/javascript">
  BUI.use('bui/form',function (Form) {
    var form = new Form.HForm({
      srcNode : '#ResumerForm'
    });
    form.render();
  });
</script>
<script type="text/javascript">
      BUI.use('bui/calendar',function(Calendar){
          var inputEl = $('#J_Month'),
        monthpicker = new BUI.Calendar.MonthPicker({
          trigger : inputEl,
         // month:1, //月份从0开始，11结束
          autoHide : true,
          align : {
            points:['bl','tl']
          },
          //year:2000,
          success:function(){
            var month = this.get('month'),
              year = this.get('year');
            inputEl.val(year + '-' + (month + 1));//月份从0开始，11结束
            this.hide();
          }
        });
        monthpicker.render();
        monthpicker.on('show',function(ev){
          var val = inputEl.val(),
            arr,month,year;
          if(val){
            arr = val.split('-'); //分割年月
            year = parseInt(arr[0]);
            month = parseInt(arr[1]);
            monthpicker.set('year',year);
            monthpicker.set('month',month - 1);
          }
        });
      });
</script>
</body>
</html>