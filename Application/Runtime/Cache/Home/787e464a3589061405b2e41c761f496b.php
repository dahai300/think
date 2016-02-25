<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>惠州市盈佳农业发展有限公司</title>
<meta name="keywords" content="玉米，甜玉米，新鲜水果,惠州000" />
<meta name="description" content="惠州市盈佳农业发展有限公司，玉米，甜玉米，新鲜水果" />
<link rel="stylesheet" type="text/css" href="/hzyj/Public/css/style.css" />
<script type="text/javascript" src="/hzyj/Public/js/jquery-1.11.1.min.js"></script>
</head>
<body>
<div class="header">
	<h1 class="logo"><a href="/hzyj/Home" id="logo" title="惠州市盈佳农业有限公司"></a></h1>
	<div class="navigation">
		<ul class="nav">
			<li><a href="/hzyj/Home">首页</a></li>     
			<li>
				<a href="javascript:;">关于盈佳</a>
				 <ul class="nav-sub">
					<li><a href="<?php echo U('/about_1');?>">盈佳简介</a></li>
					<li><a href="<?php echo U('/articles_50');?>">盈佳大事记</a></li>
					<li><a href="<?php echo U('/articles_51');?>">媒体报导</a></li>
					<li><a href="<?php echo U('/articles_52');?>">成员动态</a></li>
					<li><a href="<?php echo U('/contact_2');?>">联系我们</a></li>
				</ul>
			</li>     
			<li>
				<a href="javascript:;">甜玉米产业信息</a>
				<ul class="nav-sub nav-sub-sp">
					<li>
						<a href="javascript:;">生产信息</a>
						<ul class="nav-sub3">
							<li><a href="<?php echo U('/articles_58');?>">种子信息</a></li>
							<li><a href="<?php echo U('/articles_59');?>">农药信息</a></li>
							<li><a href="<?php echo U('/articles_60');?>">肥料信息</a></li>
							<li><a href="<?php echo U('/articles_61');?>">田间管理信息</a></li>
						</ul>
					</li>
					<li><a href="<?php echo U('/articles_54');?>">加工信息</a></li>
					<li><a href="<?php echo U('/articles_55');?>">销售信息</a></li>
				</ul>
			</li>   
			<li><a href="#">网上商城</a></li>			
			<li><a href="<?php echo U('/sy/');?>" target="_blank">溯源系统</a></li>     				
			<li><a href="<?php echo U('/products/');?>">产品中心</a></li>      				
			<li>
				<a href="javascript:;">服务中心</a>
				<ul class="nav-sub">
					<li><a href="<?php echo U('/articles_56');?>">合作农户</a></li>
					<li><a href="<?php echo U('/articles_57');?>">合作代理商</a></li>
				</ul>
			</li>      				
			<li><a href="<?php echo U('/recruit');?>">人才招聘</a></li>
		</ul>
	</div>
</div>
 	<div class="sub-banner">
 		<a href="javascript:;" class="sub-banner-c"></a>
 	</div>
 	
	<div class="content pt30">
		<div class="c-l">
		<?php if($pos[0]=="关于盈佳"): $id=$_GET['id']; ?>
<dl class="sub-l">
	<dt>关于盈佳</dt>
	<dd><a href="<?php echo U('/about_1');?>" <?php if($id == 1): ?>class="on"<?php endif; ?>>盈佳简介</a></dd>
	<dd><a href="<?php echo U('/articles_50');?>" <?php if($id == 50): ?>class="on"<?php endif; ?>>盈佳大事记</a></dd>
	<dd><a href="<?php echo U('/articles_51');?>" <?php if($id == 51): ?>class="on"<?php endif; ?>>媒体报导</a></dd>
	<dd><a href="<?php echo U('/articles_52');?>" <?php if($id == 52): ?>class="on"<?php endif; ?>>成员动态</a></dd>
	<dd><a href="<?php echo U('/contact_2');?>" <?php if($id == 2): ?>class="on"<?php endif; ?>>联系我们</a></dd>
</dl>
		<?php elseif($pos[0]=="服务中心"): ?>
			<?php $id=$_GET['id']; ?>
<dl class="sub-l">
	<dt>服务中心</dt>
	<dd><a href="<?php echo U('/articles_56');?>" <?php if($id == 56): ?>class="on"<?php endif; ?>>合作农户</a></dd>
	<dd><a href="<?php echo U('/articles_57');?>" <?php if($id == 57): ?>class="on"<?php endif; ?>>合作代理商</a></dd>
</dl>
		<?php else: ?>
			<?php $id=$_GET['id']; ?>
<dl class="sub-l">
	<dt>甜玉米产业信息</dt>
	<dd class="sp"><a href="javascript:;">生产信息</a>
		<p><a href="<?php echo U('/articles_58');?>" <?php if($id == 58): ?>class="on"<?php endif; ?>>种子信息</a></p>
		<p><a href="<?php echo U('/articles_59');?>" <?php if($id == 59): ?>class="on"<?php endif; ?>>农药信息</a></p>
		<p><a href="<?php echo U('/articles_60');?>" <?php if($id == 60): ?>class="on"<?php endif; ?>>肥料信息</a></p>
		<p><a href="<?php echo U('/articles_61');?>" <?php if($id == 61): ?>class="on"<?php endif; ?>>田间管理信息</a></p>
	</dd>
	<dd><a href="<?php echo U('/articles_54');?>" <?php if($id == 54): ?>class="on"<?php endif; ?>>加工信息</a></dd>
	<dd><a href="<?php echo U('/articles_55');?>" <?php if($id == 55): ?>class="on"<?php endif; ?>>销售信息</a></dd>
</dl><?php endif; ?>
		</div>
		<div class="c-r">
			<?php $last=count($pos)-1 ?>
			<h2 class="sub-r"><?php echo ($pos[$last]); ?><em>您的当前位置：首页 &nbsp;&gt&nbsp;<?php if(is_array($pos)): foreach($pos as $key=>$v): echo ($v); if($key != $last): ?>&nbsp;&gt&nbsp;<?php endif; endforeach; endif; ?></em></h2>
			<div class="c-r-c d-pd">
				<h3 class="dtitle"><?php echo ($getArticle["title"]); ?></h3>
				<div class="editor">
					<div class="editor-c">
					<em>发布时间：<?php echo (date('Y-m-d',$getArticle["time"])); ?></em><div class="sspan">分享到：</div><div class="share"><div class="bshare-custom"><div class="bsPromo bsPromo2"></div><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none;">33.7K</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=3&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script></div>
					</div>
				</div>
				<div class="detail-c">
					<?php echo ($getArticle["content"]); ?>
					<div class="b-share">
					<div class="bshare-custom icon-medium-plus"><div class="bsPromo bsPromo2"></div><a title="分享到" href="http://www.bShare.cn/" id="bshare-shareto" class="bshare-more">分享到</a><a title="分享到QQ空间" class="bshare-qzone"></a><a title="分享到新浪微博" class="bshare-sinaminiblog"></a><a title="分享到人人网" class="bshare-renren"></a><a title="分享到腾讯微博" class="bshare-qqmb"></a><a title="分享到微信" class="bshare-weixin" href="javascript:void(0);"></a><a title="更多平台" class="bshare-more bshare-more-icon more-style-addthis"></a><span class="BSHARE_COUNT bshare-share-count" style="float: none;">33.7K</span></div><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/buttonLite.js#style=-1&amp;uuid=&amp;pophcol=2&amp;lang=zh"></script><script type="text/javascript" charset="utf-8" src="http://static.bshare.cn/b/bshareC0.js"></script>
					</div>
				</div>
				<div class="artilce-prenxt">

					<em class="pre-article fl">
						<?php if(empty($front)): ?><strong>上一篇：</strong>已经是第一条
				         <?php else: ?>
							<strong>上一篇：</strong><a href="<?php echo U(MODULE_NAME.'/Article/articleDetail',array('id'=>$front['id'],'acid'=>$acid));?>" ><?php echo (msubstr($front["title"],0,26)); ?></a><?php endif; ?>
					</em>        
					<em class="nxt-article fr">        
				        <?php if(empty($after)): ?><strong>下一篇：</strong>已经是最后一条
				        <?php else: ?>
				        	<strong>下一篇：</strong><a href="<?php echo U(MODULE_NAME.'/Article/articleDetail',array('id'=>$after['id'],'acid'=>$acid));?>" ><?php echo (msubstr($after["title"],0,26)); ?></a><?php endif; ?>
					</em>

				</div>
			</div>
			<div class="yy">
				<!-- UY BEGIN -->
				<div id="uyan_frame"></div>
				<script type="text/javascript" src="http://v2.uyan.cc/code/uyan.js?uid=1991328"></script>
				<!-- UY END -->
			</div>
		</div>
		<div class="clear"></div>
	</div>
<div class="footer">
	<div class="footer-c">
		<p>版权所有：盈佳农业发展有限公司&nbsp;&nbsp;&nbsp;&nbsp;联系电话：0752-2793323&nbsp;&nbsp;&nbsp;&nbsp;联系地址：惠州市惠城区汝湖镇仍图社区（盈佳甜玉米专业合作社）</p>
		<p>技术支持：<a href="http://www.gdcct.com.cn" target="_blank">广东村村通科技有限公司</a>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2000-2013 gdcct.net. All Rights Reserved&nbsp;&nbsp;粤B2-20052010号-6</p>
	</div>
</div>
 <script type="text/javascript" src="/hzyj/Public/js/jquery.nav.js"></script>
 <script type="text/javascript">
 	jQuery(".nav").nav();
 </script>
</body>
</html>