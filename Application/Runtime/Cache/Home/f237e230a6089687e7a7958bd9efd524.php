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
<div class="bnlazy sub-banner" data-original="/Public/images/2.jpg" width="100%" height="300" style="display: block; background-image: url(/Public/images/2.jpg);">  
</div>
<style type="text/css">
    html,body{margin:0;padding:0;}
    .iw_poi_title {color:#CC5522;font-size:14px;font-weight:bold;overflow:hidden;padding-right:13px;white-space:nowrap}
    .iw_poi_content {font:12px arial,sans-serif;overflow:visible;padding-top:4px;white-space:-moz-pre-wrap;word-wrap:break-word}
</style>
	<div class="content">
		<div class="sub-left">
	<h2 class="sub-ltitle">栏目导航</h2>
	<ul class="sub-lul">
		<li><a href="<?php echo U('/aboutus/');?>">关于我们</a></li>
		<li><a href="<?php echo U('/culture/');?>">企业文化</a></li>
		<li><a href="<?php echo U('/xlsteps/');?>">寻猎流程</a></li>
		<li><a href="<?php echo U('/advantage/');?>">猎头招人优势</a></li>
		<li><a href="<?php echo U('/myrecruit/');?>">招贤纳士</a></li>
		<li><a href="<?php echo U('/contactus/');?>">联系我们</a></li>
	</ul>
</div>
		<div class="sub-right">
			<h2 class="sub-rtitle">联系我们</h2>
			<div class="sub-rc yahei" id="aboutus">
			 
				<p>全国服务热线:  400-808-8932</p>
				<p>Tel：+8620 3424 8656</p>
				<p>QQ: 2891075438</p>
				
			 
				<p>Add:广州市海珠区新港中路456号纵横国际东塔1332室</p>
				<script type="text/javascript" src="http://api.map.baidu.com/api?key=&v=1.1&services=true"></script>
				<div style="width:695px;height:550px;border:#ccc solid 1px;" id="dituContent"></div>
			</div>			
<script type="text/javascript">
    //创建和初始化地图函数：
    function initMap(){
        createMap();//创建地图
        setMapEvent();//设置地图事件
        addMapControl();//向地图添加控件
        addMarker();//向地图中添加marker
    }
    
    //创建地图函数：
    function createMap(){
        var map = new BMap.Map("dituContent");//在百度地图容器中创建一个地图
        var point = new BMap.Point(113.337496,23.10126);//定义一个中心点坐标
        map.centerAndZoom(point,18);//设定地图的中心点和坐标并将地图显示在地图容器中
        window.map = map;//将map变量存储在全局
    }
    
    //地图事件设置函数：
    function setMapEvent(){
        map.enableDragging();//启用地图拖拽事件，默认启用(可不写)
        map.enableScrollWheelZoom();//启用地图滚轮放大缩小
        map.enableDoubleClickZoom();//启用鼠标双击放大，默认启用(可不写)
        map.enableKeyboard();//启用键盘上下左右键移动地图
    }
    
    //地图控件添加函数：
    function addMapControl(){
        //向地图中添加缩放控件
	var ctrl_nav = new BMap.NavigationControl({anchor:BMAP_ANCHOR_TOP_LEFT,type:BMAP_NAVIGATION_CONTROL_LARGE});
	map.addControl(ctrl_nav);
        //向地图中添加缩略图控件
	var ctrl_ove = new BMap.OverviewMapControl({anchor:BMAP_ANCHOR_BOTTOM_RIGHT,isOpen:1});
	map.addControl(ctrl_ove);
        //向地图中添加比例尺控件
	var ctrl_sca = new BMap.ScaleControl({anchor:BMAP_ANCHOR_BOTTOM_LEFT});
	map.addControl(ctrl_sca);
    }
    
    //标注点数组
    var markerArr = [{title:"广州千唯仕企业管理咨询有限公司",content:"Tel：+8620&nbsp;3424&nbsp;8656&nbsp;&nbsp;&nbsp;&nbsp;<br/>Add：广州市海珠区新港中路456号纵横国际东塔1332室",point:"113.336683|23.101701",isOpen:0,icon:{w:21,h:21,l:0,t:0,x:6,lb:5}}
		 ];
    //创建marker
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
    //创建InfoWindow
    function createInfoWindow(i){
        var json = markerArr[i];
        var iw = new BMap.InfoWindow("<b class='iw_poi_title' title='" + json.title + "'>" + json.title + "</b><div class='iw_poi_content'>"+json.content+"</div>");
        return iw;
    }
    //创建一个Icon
    function createIcon(json){
        var icon = new BMap.Icon("http://app.baidu.com/map/images/us_mk_icon.png", new BMap.Size(json.w,json.h),{imageOffset: new BMap.Size(-json.l,-json.t),infoWindowOffset:new BMap.Size(json.lb+5,1),offset:new BMap.Size(json.x,json.h)})
        return icon;
    }
    
    initMap();//创建和初始化地图
</script>
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
	navStyle(5);
    $(function(){
        $(".sub-lul li:eq(4)").hide();
    })
</script>
</body>
</html>