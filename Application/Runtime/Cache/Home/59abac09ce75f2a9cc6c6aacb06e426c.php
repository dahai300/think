<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<title>盈佳农业发展有限公司——安全农产品溯源信息公共服务平台</title>
<link href="/hzyj/Public/sy/css/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/hzyj/Public/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
var code; //在全局 定义验证码  
function createCode(){ 
	code = "";
	var codeLength = 4;//验证码的长度  
	//所有候选组成验证码的字符，可以用中文  
	//var selectChar = new Array(0,1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');  
	var selectChar = new Array(1,2,3,4,5,6,7,8,9,'A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','S','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','m','n','p','q','r','s','t','u','v','w','x','y','z');  
	for(var i=0; i<codeLength; i++)  
	{  
		var charIndex = Math.floor(Math.random()*60);  
		code += selectChar[charIndex];  
	}  
	return code;  
}  

//显示验证码  
function show(){
	var code = createCode();//获得随机生成的验证码字符串
	var w = 0;//设置验证码图片的宽度,0即为不设置,VerificationCodeAction的默认宽度为70
	var h = 0;//设置验证码图片的高度,0即为不设置,VerificationCodeAction的默认高度为23
	document.getElementById("code").src="http://sats.gdcct.com:80/ts/topic/verifyImg.jspx?code="+code+"&width="+w+"&height="+h;
}  

/*window.onload = function()   */
 $(function(){         
	 show();  
});

function validate ()
{  
	var inputCode = document.getElementById("vfcode").value.toLowerCase();
	if(inputCode.length <= 0)  
	{  
		//alert("请输入验证码！"); 
		document.getElementById("showMsg").innerHTML = "请输入验证码";
		return false;  
	}  
	else if(inputCode != code.toLowerCase())  
	{  
		//alert("验证码输入错误！");  
		document.getElementById("showMsg").innerHTML = "验证码输入错误";
		show();//刷新验证码  
		return false;  
	}  
	else{
		document.loginForm.submit();
		return true;  
	} 
}  
</script>
<script type="text/javascript">
// "0"~"9"按钮
var ts = "";
function tsInput(name){
	ts = document.getElementById("tracesource").value;
	var num = document.getElementById(name).value;
	document.getElementById("spanTip").innerHTML = "";
	ts += num;
	document.getElementById("tracesource").value = ts;
	
}
// 退格按钮
function btnBack(){
	var tmpTS = document.getElementById("tracesource").value;
	if(tmpTS.length > 0){
		var tmpCode = tmpTS.substring(0, tmpTS.length-1);
		document.getElementById("tracesource").value = tmpCode;
		ts = tmpCode;
	}
}
// 清除按钮
function btnClear(){
	document.getElementById("tracesource").value = "";
	ts = "";
}
</script>
<script language="javascript" type="text/javascript">
var syUrl="<?php echo U(MODULE_NAME.'/Sy/page');?>";
/** 提交验证函数 **/
function submitFn() {
	document.getElementById("spanTip").innerHTML = "";
	var tracesource = document.getElementById("tracesource").value.replace(
			/\r/g, "").replace(/\n/g, "");
	if (!/^\d*$/.test(tracesource)) {
		//alert("溯源码只能为数字!");
		document.getElementById("spanTip").innerHTML = "溯源码只能为数字！";
		document.getElementById("tracesource").focus();
		return false;
	} else if (tracesource.length >0 && tracesource.length != 20) {
		//alert("溯源码的长度为20位!");
		document.getElementById("spanTip").innerHTML = "溯源码的长度为20位！";
		document.getElementById("tracesource").focus();
		return false;
	} else if(tracesource.length == 0){
		//alert("请输入溯源码!");
		document.getElementById("spanTip").innerHTML = "请输入溯源码！";
		document.getElementById("tracesource").focus();
		return false;
	}
	else {

		document.searchForm.action=syUrl+'?tracesource='+tracesource;
		document.searchForm.submit();
		document.getElementById("spanTip").innerHTML = "";
		return true;
	}
}
</script>
</head>
<body>
<div class="header">
	<div class="top-toolbar">
		<h1 class="left">欢迎来到盈佳农业发展有限公司安全农产品溯源信息公共服务平台！</h1>
		<ul class="toplink right">
            <li><a href="/hzyj/Home">盈佳农业发展有限公司</a></li>
		</ul>
	</div>
</div>
<div class="wrapper mb25">
	<div class="bnr-area">
    	<div class="w-main bnr-con">
        	<h2 style="width:481px;height:93px;top:100px;left:475px;"></h2>
        </div>
    </div>
</div>
<div class="w-main mb25">
    <div class="left so-tab">
        <div class="hd"><h2>农产品溯源查询</h2></div>
        <div class="bd">
            <div class="so-form left">
                <h3>请扫描或输入溯源码：<span class="so-erro" id="spanTip"></span></h3>
                <div class="so-input">
                    <form action="<?php echo U(MODULE_NAME.'/Sy/page');?>" method="post" name="searchForm" onsubmit="return submitFn();">
                        <input type="text" name="tracesource" id="tracesource" />
                        <a href="javascript:;" onclick="javascript:submitFn();">GO</a>
                    </form>
                </div>
                <div class="so-btnkey-tab">
                    <div class="so-btnkey">
                        <button class="btnkey-num" id="num1" name="num1" value="1" onclick="javascript:tsInput(&#39;num1&#39;);return false;">1</button>
                        <button class="btnkey-num" id="num2" name="num2" value="2" onclick="javascript:tsInput(&#39;num2&#39;);return false;">2</button>
                        <button class="btnkey-num" id="num3" name="num3" value="3" onclick="javascript:tsInput(&#39;num3&#39;);return false;">3</button>
                        <button class="btnkey-num" id="num4" name="num4" value="4" onclick="javascript:tsInput(&#39;num4&#39;);return false;">4</button>
                        <button class="btnkey-num" id="num5" name="num5" value="5" onclick="javascript:tsInput(&#39;num5&#39;);return false;">5</button>
                        <button class="btnkey-num" id="num6" name="num6" value="6" onclick="javascript:tsInput(&#39;num6&#39;);return false;">6</button>
                        <button class="btnkey-num" id="num7" name="num7" value="7" onclick="javascript:tsInput(&#39;num7&#39;);return false;">7</button>
                        <button class="btnkey-num" id="num8" name="num8" value="8" onclick="javascript:tsInput(&#39;num8&#39;);return false;">8</button>
                        <button class="btnkey-num" id="num9" name="num9" value="9" onclick="javascript:tsInput(&#39;num9&#39;);return false;">9</button>
                        <button class="btnkey-num" id="num0" name="num0" value="0" onclick="javascript:tsInput(&#39;num0&#39;);return false;">0</button>
                        <button class="btnkey-num btnkey-oper" id="btnBack" name="btnBack" onclick="javascript:btnBack();return false;">退格</button>
                        <button class="btnkey-num btnkey-oper" id="btnClear" name="btnClear" onclick="javascript:btnClear();return false;">清空</button>
                    </div>
                </div>
            </div>
            <div class="weixin left">
                <h3>手机“扫一扫”<br />安全早知道！</h3>
                <h4>（推荐微信“扫一扫”）</h4>
                <p>手机扫描产品标签上的二维码图片，即可查看产品的溯源信息：如产品批次、生产信息、检测信息等。</p>
            </div>
        </div>
    </div>
    <div class="right logintab">
    	<h2>企业用户登录</h2>
        <form id="form" method="post" name="loginForm" action="http://sats.gdcct.com/ts/topic/tstopic.jsp" onsubmit="javascript:validate();return false;">
			<input type="hidden" name="login" value="true">
            <ul class="loginform">
                <li class="Error">
                    <span>&nbsp;</span>
                    <p id="showMsg"></p>
                </li>
                <li>
                	<span>用户名：</span>
                    <input name="username" id="username" type="text" size="24" value="" style=" width:150px;">
                </li>
                <li>
                	<span>密　码：</span>
                    <input type="password" size="24" name="password" id="password" style=" width:150px;">
                </li>
                <li>
                	<span>验证码：</span>
                    <input name="inputCode" type="text" size="10" id="vfcode" style="width:66px;">
                    <a id="reloadValidateCode" href="http://sats.gdcct.com/ts/topic/return%20false;"><img id="code" src="" width="74" height="32" onclick="javascript:show();return false;"></a>
                </li>
                <li>
                	<span>&nbsp;</span>
                    <button id="btnLogin" type="submit" onclick="javascript:validate();return false;">登录</button>
                    <a id="unRemember" href="http://sats.gdcct.com/ts/usercenter/fbyemail.jspx" target="_blank">忘记密码？</a>
                </li>
           </ul>
        </form>
    </div>
</div>
<div class="w-main mb30">
	<div class="hd"><h2>溯源查询使用方法</h2></div>
    <div class="bd">
    	<div class="so-step">
        	<p><img src="/hzyj/Public/sy/images/pic-step-web.gif" width="1000" height="250" /></p>
        	<p><img src="/hzyj/Public/sy/images/pic-step-mp.gif" width="1000" height="280" /></p>
        </div>
    </div>
</div>
<div class="footer">
    <p>版权所有 © 惠州市盈佳农业发展有限公司　ICP证：鲁ICP备13031090号</p>
    <p>主办：惠州市盈佳农业发展有限公司　地址：广东省惠州市惠城区汝湖镇仍图仍博路</p>
    <p>技术支持：<a href="http://corp.gdcct.net/" target="_blank">广东村村通科技有限公司</a></p>
</div>
</body>
</html>