<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>后台登录</title>
<link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/Css/bootstrap-responsive.css" />
<link rel="stylesheet" type="text/css" href="/Public/admin/Css/style.css" />
<script type="text/javascript" src="/Public/admin/assets/js/jquery-1.8.1.min.js"></script>
<script type="text/javascript">
var lgUrl="<?php echo U(MODULE_NAME.'/Login/login','','');?>";
var sucUrl="<?php echo U(MODULE_NAME.'/Index/index','','');?>";
$(function(){
  $("#submitBtn").click(function(){
    var username = $("#id_username").val();
    var password = $("#id_password").val();
    if($.trim(username)=='' || $.trim(password)==''){
      $(".lg_error").html("用户名或密码不能为空");
      return false;
    }
    $.ajax({
      type:"post",
      url:lgUrl,
      dataType:"json",
      data:{name:username,pwd:password},
      success:function(data){
        if(data.status==0){
          $(".lg_error").html("账号或密码错误");
        }else if(data.status==1){
          window.location.href=sucUrl;
        }else{
          $(".lg_error").html("系统错误");
        }
      }
    })
  });

  $("#id_password,#submitBtn").keydown(function(a){
      a.stopPropagation();
      if(a.keyCode==13){
        $("#submitBtn").click();
      }})

 })
</script>
</head>

<body>
<div class="login">
  <div class="login-c">
      <div class="login-cc">
        <div class="fly"></div>
        <div class="lg-info">
          <div class="lg-title"></div>
          <div class="lg-ipt">
              <form action="" method="post" id="loginform">
                <div class="form-row">
                  <label class="user_ico">&nbsp;</label>
                  <input id="id_username" type="text" name="username" maxlength="30" class="ipt" placeholder="请输入用户名">
                </div>
                <div class="form-row">
                  <label class="paswd_ico">&nbsp;</label>
                  <input type="password" name="password" id="id_password" class="ipt" placeholder="请输入密码">
                </div>
                
              </form>
              <button id="submitBtn">登录</button> <span class="lg_error"></span>
          </div>
        </div>
      </div>
  </div>
</div>
</body>
</html>