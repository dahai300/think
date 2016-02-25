<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>user</title>
	<link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="/qws/Public/admin/Css/style.css" />
    <script type="text/javascript" src="/qws/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript">
    $(function(){
    	var validate={pwd:1,code:1};
    	var oldpassword = $("input[name='oldpassword']");
		var password = $("input[name='password']");
		var rpassword = $("input[name='rpassword']");
		$("#pwdForm").submit(function(){
			validate.pwd = 1;
			
			if(oldpassword.val() ==''){
				oldpassword.parent().find("span").remove().end().append("<span class='error'>请输入旧密码</span>");
				validate.pwd = 0;
			}else {
				oldpassword.parent().find("span").remove();
			}
			if(password.val() ==''){
				password.parent().find("span").remove().end().append("<span class='error'>请输入新密码</span>");
				validate.pwd = 0;
			}
			if(rpassword.val() ==''){
				rpassword.parent().find("span").remove().end().append("<span class='error'>请输入确认密码</span>");
				validate.pwd = 0;
			}else {
				rpassword.parent().find("span").remove();
			}
			if(password.val() != rpassword.val()){
				password.parent().find("span").remove().end().append("<span class='error'>两次密码不一样</span>");
				validate.pwd = 0;
			}else if(password.val() !='') {
				password.parent().find("span").remove();
			}
			if (validate.pwd == 0) {
				return false;
			}
			return true;
		});

		oldpassword.focus(function(){$(this).parent().find("span").remove();});
		password.focus(function(){$(this).parent().find("span").remove();});
		rpassword.focus(function(){$(this).parent().find("span").remove();});

    });
</script>
</head>

<body>
<form method='post' id="pwdForm" name="pwdForm" action="<?php echo U(MODULE_NAME. '/Public/changePwdHandle');?>">
	<table class="table table-bordered table-hover definewidth m10">
		<thead>
			<tr>
				<th colspan="2">用户中心|修改密码</th>
			</tr></thead>
		  <tr>
			<td align="right" width="10%">旧密码：</td>
			<td align="left"><input type="password" name="oldpassword" value=""/></td>
		  </tr>
		   <tr>
			<td align="right">新密码：</td>
			<td align="left"><input type="password" name="password"  value=""/></td>
		  </tr>
		   <tr>
			<td align="right">新密码确认：</td>
			<td align="left"><input type="password" name="rpassword" value=""/></td>
		  </tr>
		<tr>
			<td></td>
			<td><input type="submit" id="submit" value="提 交" class="btn btn-success"></td>
		</tr>
	</table>
</form>
</body>
</html>