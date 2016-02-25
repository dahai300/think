<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>惠州市盈佳农业发展有限公司</title>
<meta name="keywords" content="玉米，甜玉米，新鲜水果" />
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
			<?php $id=$_GET['id']; ?>
<dl class="sub-l">
	<dt>关于盈佳</dt>
	<dd><a href="<?php echo U('/about_1');?>" <?php if($id == 1): ?>class="on"<?php endif; ?>>盈佳简介</a></dd>
	<dd><a href="<?php echo U('/articles_50');?>" <?php if($id == 50): ?>class="on"<?php endif; ?>>盈佳大事记</a></dd>
	<dd><a href="<?php echo U('/articles_51');?>" <?php if($id == 51): ?>class="on"<?php endif; ?>>媒体报导</a></dd>
	<dd><a href="<?php echo U('/articles_52');?>" <?php if($id == 52): ?>class="on"<?php endif; ?>>成员动态</a></dd>
	<dd><a href="<?php echo U('/contact_2');?>" <?php if($id == 2): ?>class="on"<?php endif; ?>>联系我们</a></dd>
</dl>
		</div>
		<div class="c-r">
			<h2 class="sub-r">联系我们<em>您的当前位置：首页 &nbsp;&gt&nbsp;关于盈佳&nbsp;&gt&nbsp;联系我们</em></h2>
			<div class="c-r-c d-pd">
			<div style="width:800px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
<script type="text/javascript">
    function initMap(){
        createMap();
        setMapEvent();
        addMapControl();
        addMarker();
    }
    function createMap(){
        var map = new BMap.Map("dituContent");
        var point = new BMap.Point(114.584841,23.191023);
        map.centerAndZoom(point,18);
        window.map = map;
    }

    function setMapEvent(){
        map.enableDragging();
        map.enableScrollWheelZoom();
        map.enableDoubleClickZoom();
        map.enableKeyboard();
    }
    

    function addMapControl(){

	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    var markerArr = [{title:"惠州市惠城区汝湖镇仍图社区（盈佳甜玉米专业合作社）",content:"惠州市惠城区汝湖镇仍图社区（盈佳甜玉米专业合作社）",point:"114.583974|23.190632",isOpen:1,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    function addMarker(){
        for(var i=0;i<markerArr.length;i++){
            var json = markerArr[i];
            var p0 = json.point.split("|")[0];
            var p1 = json.point.split("|")[1];
            var point = new BMap.Point(p0,p1);
			var iconImg = createIcon(json.icon);
            var marker = new BMap.Marker(point,{icon:iconImg});
			var iw = createInfoWindow(i);
			var label = new BMap.Label(json.title,{"offset":new BMap.Size(json.icon.lb-json.icon.x+10,-20)});
			marker.setLabel(label);
            map.addOverlay(marker);
            label.setStyle({
                        borderColor:"#808080",
                        color:"#333",
                        cursor:"pointer"
            });
			
			(function(){
				var index = i;
				var _iw = createInfoWindow(i);
				var _marker = marker;
				_marker.addEventListener("click",function(){
				    this.openInfoWindow(_iw);
			    });
			    _iw.addEventListener("open",function(){
				    _marker.getLabel().hide();
			    })
			    _iw.addEventListener("close",function(){
				    _marker.getLabel().show();
			    })
				label.addEventListener("click",function(){
				    _marker.openInfoWindow(_iw);
			    })
				if(!!json.isOpen){
					label.hide();
					_marker.openInfoWindow(_iw);
				}
			})()
        }
    }
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();
</script>

				<!-- <?php echo ($r[0]["content"]); ?> -->
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