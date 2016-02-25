<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>test</title>
	<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
	<script type="text/javascript">

 		$(function(){
 			$.ajax({
				type:'get',
				url:'http://www.dahai.pw/Test2015/jsonpTest',
				dataType:'jsonp',
				jsonp: "callback",//传递给请求处理程序或页面的，用以获得jsonp回调函数名的参数名(一般默认为:callback)
             	jsonpCallback:"flightHandler",//自定义的jsonp回调函数名称，默认为jQuery自动生成的随机函数名，也可以写"?"，jQuery会自动为你
				success:function(res){
					console.log('调用成功'+res)
				}
			 
			});
 		})
	</script>
</head>
<body>
	<p><a href="javascript:;" id="kkk">测试jsonp</a></p>
</body>
</html>