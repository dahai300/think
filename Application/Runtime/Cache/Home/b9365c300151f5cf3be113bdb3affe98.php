<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Content-Language" content="zh-CN">
<title>盈佳农业发展有限公司——安全农产品溯源信息公共服务平台</title>
<link href="/hzyj/Public/sy/css/main.css" type="text/css" rel="stylesheet">
<script type="text/javascript" src="/hzyj/Public/sy/js/jquery1.42.min.js"></script>
<script src="/hzyj/Public/sy/js/jquery.ae.image.resize.js"></script>
<script type="text/javascript" src="/hzyj/Public/sy/js/SuperSlide.2.1.1.js"></script>
 <script type="text/javascript" language="javascript">
			
		var paramString=document.location.search;
		if(paramString!=""){
			var reg=/^\?.*tracesource=(.+)/i;
			reg.exec(paramString);
			var tracesource =  RegExp.$1;
			$.ajax({
				type : "get",
				dataType: "jsonp",
                jsonp: "jsonpCallback",
				url : "http://sats.gdcct.com/ts/tracesource/newQueryTraceSourceJson.jspx?tracesource=" + tracesource + "&" + new Date(),
				cache : false,
				success : function(data) {
					var json = eval(data);
					if(json.resultInfo == "resultNull"){
						alert(json.msg);
					}else{
					/****产品信息*****/
					var productJson = json.productJson;
					if(typeof(productJson.productName)!="undefined"){
						$("#productName").append("产品名称："+ productJson.productName );
					}
					if(typeof(productJson.brand)!="undefined"){
						$("#brand").append("品牌："+ productJson.brand );
					}
					if(typeof(productJson.qualityGrade)!="undefined"){
						$("#qualityGrade").append("等级："+ productJson.qualityGrade );
					}
					if(typeof(productJson.enterpriseName)!="undefined"){
						$("#productEnterpriseName").append("生产企业："+ productJson.enterpriseName );
					}
					if(typeof(productJson.traceSource)!="undefined"){
						$("#traceSource").append("溯源码："+ productJson.traceSource );
					}
					if(typeof(productJson.batchName)!="undefined"){
						$("#batchName").append("批次号："+ productJson.batchName );
					}
					if(typeof(productJson.produceDate)!="undefined"){
						$("#produceDate").append("生产日期："+ productJson.produceDate );
					}
					if(typeof(productJson.warrantDate)!="undefined"){
						$("#warrantDate").append("保质日期："+ productJson.warrantDate );
					}
				
					var productAppendix = productJson.productAppendix;
					var productAppendixHTML="";
					if(typeof(productAppendix)!="undefined"){

						var temp1="<h3>生产附件：</h3>"
								  +"<div class='silder-box'>"
								  +"<div class='btn prev'></div>"
                                  +"<div class='silder'>" 
                                  +"<ul>";
						$.each(productAppendix,function(entryIndex,entry){
							temp1+="<li>"
								+"<h4>"+entry['appendixName']+"</h4>"
								+"<a href='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] + "' target='_blank'>"
								+"<img src='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] +"' width='280' height='270'  />"
								+"</a>"
								+"</li>";
								
						});

							temp1+="</ul>"
								 +"</div>"
								 +"<div class='btn next'></div>"
								 +"</div>";


							productAppendixHTML+= temp1;
					}

					productAppendixHTML+="<p class='infofrom'>"; 
					if(typeof(productJson.recordInstitution)!="undefined"){
						productAppendixHTML+="录入机构："+ productJson.recordInstitution ;
					}
					productAppendixHTML+="</p><div class='sdline'></div>";

					$("#productAppendix").append(productAppendixHTML);
					
					/***********生产企业信息************/
					var enterpriseJson = json.enterpriseJson;
					if(typeof(enterpriseJson.enterpriseName)!="undefined"){
						$("#enterpriseName").append("企业名称："+ enterpriseJson.enterpriseName );
					}
					if(typeof(enterpriseJson.mainProduct)!="undefined"){
						$("#mainProduct").append("<span>主营产品：</span><div class='endcontent'>"+ enterpriseJson.mainProduct +"</div>" );
					}
					if(typeof(enterpriseJson.organizationcode)!="undefined"){
						$("#organizationcode").append("等级："+ enterpriseJson.organizationcode );
					}
					if(typeof(enterpriseJson.businessLicenceCode)!="undefined"){
						$("#businessLicenceCode").append("营业执照号码："+ enterpriseJson.businessLicenceCode );
					}
					if(typeof(enterpriseJson.telePhone)!="undefined"){
						$("#telePhone").append("联系电话："+ enterpriseJson.telePhone );
					}
					if(typeof(enterpriseJson.fax)!="undefined"){
						$("#fax").append("传真号码："+ enterpriseJson.fax );
					}
					if(typeof(enterpriseJson.address)!="undefined"){
						$("#enterpriseAddress").append("联系地址："+ enterpriseJson.address );
					}
					if(typeof(enterpriseJson.website)!="undefined" && enterpriseJson.website != ''){
						$("#website").append("网         址：<a href='"+ enterpriseJson.website + "' target='_blank'>"+ enterpriseJson.website + "</a>");
					}
					if(typeof(enterpriseJson.enterpriseProfile)!="undefined"){
						$("#enterpriseProfile").append("<span>企业概况：</span> <div class='endcontent'>"+ enterpriseJson.enterpriseProfile + "</div>" );
					}
					
					var enterpriseAppendix = enterpriseJson.enterpriseAppendix;
					var enterpriseAppendixHTML ="";

					if(typeof(enterpriseAppendix)!="undefined"){
						
						var temp2="<h3>企业附件：</h3>"
								  +"<div class='silder-box'>"
								  +"<div class='btn prev'></div>"
                                  +"<div class='silder'>" 
                                  +"<ul>";


						$.each(enterpriseAppendix,function(entryIndex,entry){
							 temp2+= "<li>"
									+"<h4>"+entry['appendixName']+"</h4>"
									+"<a href='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] + "' target='_blank'>"
									+"<img src='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] +"' width='280' height='270'  />"
									+"</a>"
									+"</li>";
							 
						 });


							 temp2+="</ul>"
								  +"</div>"
								  +"<div class='btn next'></div>"
								  +"</div>";

							enterpriseAppendixHTML += temp2;
					 }
					 enterpriseAppendixHTML+="<div class='block30'></div>";

					$("#enterpriseAppendix").append(enterpriseAppendixHTML);
					
					
					
					/**************生产基地******************/
					var productionBaseJson = json.productionBaseJson;
					if(typeof(productionBaseJson.productBaseName)!="undefined"){
						$("#productBaseName").append("基地名称："+ productionBaseJson.productBaseName );
					}
					if(typeof(productionBaseJson.address)!="undefined"){
						$("#productBaseAddress").append("基地地址："+ productionBaseJson.address  );
					}
					if(typeof(productionBaseJson.type)!="undefined"){
						$("#type").append("基地类型："+ productionBaseJson.type );
					}
					if(typeof(productionBaseJson.area)!="undefined"){
						$("#area").append("基地面积："+ productionBaseJson.area );
					}
					if(typeof(productionBaseJson.buildDate)!="undefined"){
						$("#buildDate").append("建成时间："+ productionBaseJson.buildDate );
					}
					if(typeof(productionBaseJson.resources)!="undefined"){
						$("#resources").append("<span>资源情况：</span><div class='endcontent'>"+ productionBaseJson.resources + "</div>");
					}
					if(typeof(productionBaseJson.environment)!="undefined"){
						$("#environment").append("<span>环境概况：</span> <div class='endcontent'>"+ productionBaseJson.environment + "</div>" );
					}
					
					var productBaseAppendix = productionBaseJson.productBaseAppendix;
					var productBaseAppendixHTML ="";

					if(typeof(productBaseAppendix)!="undefined"){
						
						var temp3="<h3>基地附件：</h3>"
								  +"<div class='silder-box'>"
								  +"<div class='btn prev'></div>"
                                  +"<div class='silder'>" 
                                  +"<ul>";

						$.each(productBaseAppendix,function(entryIndex,entry){
							temp3+="<li>"
								+"<h4>"+entry['appendixName']+"</h4>"
								+"<a href='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] + "' target='_blank'>"
								+"<img src='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] +"' width='280' height='270'  />"
								+"</a>"
								+"</li>";
								
						});


							temp3+="</ul>"
								  +"</div>"
								  +"<div class='btn next'></div>"
								  +"</div>";

								  productBaseAppendixHTML+= temp3;



					}
					productBaseAppendixHTML+="<div class='sdline'></div>";
					$("#productBaseAppendix").html(productBaseAppendixHTML);
					
					
					/***********检测信息*********/
				var testItemsInfo = json.testJson.testItemsInfo;
					var testItemsInfoHTML="";
					var testItemsInfoTemp="";
					$.each(testItemsInfo,function(entryIndex,entry){
						testItemsInfoTemp = "<div class='w-main-ul'>"
							 +"<h2>产品检测信息  ---"+(entryIndex+1)+" </h2>"
							 +"<ul class='infolist'>"
			                    +"<li>检测时间："; if(typeof( entry['testDate'])!="undefined"){testItemsInfoTemp+=entry['testDate'];} testItemsInfoTemp+="</li>"
			                    +"<li>检测机构："; if(typeof( entry['testInstitution'])!="undefined"){testItemsInfoTemp+=entry['testInstitution'];}testItemsInfoTemp+="</li>"
			                    +"<li>检测人员："; if(typeof( entry['testPerson'])!="undefined"){testItemsInfoTemp+=entry['testPerson'];}testItemsInfoTemp+="</li>"
			               	 +"</ul>"
			               	 +"<ul class='infolist'>"
			                    +"<li>结果判定标准：";if(typeof( entry['resultStandard'])!="undefined"){testItemsInfoTemp+=entry['resultStandard'];}testItemsInfoTemp+="</li>"
			                 +"</ul>"
			                 +"</div>"
			                 +"<div class='w-main-table'>"
			                 +"<table width='100%' cellpadding='0' cellspacing='0'>"
			                 	 +"<thead>"
			                		 +"<tr>"
			                 			+"<td width='15%'>检测项目</td>"
			                 			+"<td width='11%'>限量值</td>"
			                 			+"<td width='12%'>检测结果</td>"
			                 			+"<td width='26%'>结果说明</td>"
			                 			+"<td width='18%'>检测方法</td>"
			                			+"<td width='18%'>检测方法标准</td>"
			                		 +"</tr>"
			                	 +"</thead>"
			                	 +"<tbody>";
			                	 var testInfo = entry['testInfo'];
			                	 var testInfoHTML="";
			                	 var testInfoTemp="";
			                	 $.each(testInfo,function(entryIndex,entry){
			                		 testInfoTemp="<tr>"
			                             +"<td>"+entry['testItem']+"</td>"
			                             +"<td>"+entry['limitedValue']+"</td>"
			                             +"<td align='center'>"+entry['testResult']+"</td>"
			                             +"<td>"+entry['resultExplain']+"</td>"
			                             +"<td>"+entry['method']+"</td>"
			                             +"<td>"+entry['methodStandard']+"</td>"
			                             +"</tr>";
			                             testInfoHTML += testInfoTemp;
			                		 
			                	 });
			                	 testItemsInfoTemp = testItemsInfoTemp + testInfoHTML;
			                	 testItemsInfoTemp += "</tbody></table></div><div class='w-main-box'>";
			                	 
				                	 var testItemsAppendix = entry['testItemsAppendix'];
									
				                	 var testItemsAppendixHTML="";
				 					 var testItemsAppendixTemp="";
				 					 if(typeof(testItemsAppendix)!="undefined"){
				 						 testItemsInfoTemp +="<h3>检测附件：</h3>"
						                	 +"<div class='silder-box'>"
						                	 +"<div class='btn prev'></div>"
						                	 +"<div class='silder'>"
						                	 +"<ul>";
					 					 $.each(testItemsAppendix,function(entryIndex,entry){
											
					 						testItemsAppendixTemp = "<li>"
				         						+"<h4>"+entry['appendixName']+"</h4>"
				         							+"<a href='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] + "' target='_blank'>"
				         								+"<img src='http://sats.gdcct.com/ts/tracesource/showImgFile.jspx?uuid=" + entry['uuid'] +"' width='280' height='270'  />"
				         							+"</a>"
				         						+"</li>";
				                			 testItemsAppendixHTML += testItemsAppendixTemp;
					 					 });
										 
					                	 testItemsInfoTemp += testItemsAppendixHTML;
					                	 testItemsInfoTemp += "</ul>"
					                     	+"</div>"
					                     	+"<div class='btn next'></div>"
					                     	+"</div>";
				 					 }
									testItemsInfoTemp+="<p class='infofrom'>录入机构："; 
									
									if(typeof(entry['recordInstitution'])!="undefined"){
										testItemsInfoTemp+=entry['recordInstitution'];
									} 
									
									testItemsInfoTemp+="</p>"
													+"<div class='sdline'></div>"
													+"</div>";
				 					testItemsInfoHTML += testItemsInfoTemp;
						});
					
					$("#productAppendix").after(testItemsInfoHTML);
					}
					jQuery(".w-main-box .silder-box").slide({ mainCell:"ul",vis:3,prevCell:".prev",nextCell:".next",effect:"left"});
					$( ".silder li img" ).aeImageResize({ width: 280, height: 270 });
				}
		    });
			
		}
	</script>
<script language="javascript" type="text/javascript">
var syUrl="<?php echo U(MODULE_NAME.'/Sy/page');?>";
$(document).ready(function(e){
	$("#tracesource").focus(function(){
		if($(this).val()=="请输入产品溯源标签上的20位产品溯源码")
		$(this).val("");$(this).addClass("uTxt");}).blur(function(){if($(this).val()==''){$(this).removeClass("uTxt");$(this).val("请输入产品溯源标签上的20位产品溯源码");}
	});
});
function submitFun() {
	document.getElementById("spanTip").innerHTML = "";
	var tracesource = document.getElementById("tracesource").value.replace(/\r/g, "").replace(/\n/g, "");
	if (!/^\d*$/.test(tracesource)) {
		document.getElementById("spanTip").innerHTML = "溯源码只能为数字！";
		document.getElementById("tracesource").focus();
		document.getElementById("tracesource").value="";
		return false;
	} else if (tracesource.length >0 && tracesource.length != 20) {
		document.getElementById("spanTip").innerHTML = "溯源码的长度为20位！";
		document.getElementById("tracesource").focus();
		document.getElementById("tracesource").value="";
		return false;
	} else if(tracesource.length == 0){
		document.getElementById("spanTip").innerHTML = "请输入溯源码！";
		document.getElementById("tracesource").focus();
		document.getElementById("tracesource").value="";
		return false;
	}
	else {
		document.searchForm.action = syUrl+'?tracesource='+tracesource;
		document.searchForm.submit();
		document.getElementById("spanTip").innerHTML = "";
		return true;
	}
}
</script>
<script type="text/javascript">
//图片自适应
/*function AutoResizeImage(maxWidth,maxHeight,objImg){
	var img = new Image();
	img.src = objImg.src;
	var hRatio;
	var wRatio;
	var Ratio = 1;
	var w = img.width;
	var h = img.height;
	wRatio = maxWidth / w;
	hRatio = maxHeight / h;
	if (maxWidth ==0 && maxHeight==0){
	Ratio = 1;
	}else if (maxWidth==0)else if (maxHeight==0){
	if (wRatio<1) Ratio = wRatio;
	}else if (wRatio<1 || hRatio<1){
	Ratio = (wRatio<=hRatio?wRatio:hRatio);
	}
	if (Ratio<1){
	w = w * Ratio;
	h = h * Ratio;
	}
	objImg.height = h;
	objImg.width = w;
}*/
</script>
</head>
<body>
<div class="header">
	<div class="top-toolbar">
		<h1 class="left">欢迎来到盈佳农业发展有限公司安全农产品溯源信息公共服务平台！</h1>
		<ul class="toplink right">
            <li><a href="<?php echo U(MODULE_NAME.'Sy/index');?>">返回首页</a></li>
            <li>|</li>
            <li><a href="/hzyj/Home">盈佳农业发展有限公司</a></li>
		</ul>
	</div>
</div>
<div class="wrapper">
	<div class="bnr-area">
    	<div class="w-main bnr-con">
        	<h2 style="width:481px;height:93px;top:55px;left:475px;"></h2>
            <div class="bnr-so-form" style="top:170px;left:475px;">
            	<div class="form">
                    <form action="<?php echo U(MODULE_NAME.'/Sy/page');?>" method="post" name="searchForm" onsubmit="return submitFun();">
                        <input type="text" name="tracesource" id="tracesource" value="请输入产品溯源标签上的20位产品溯源码" />
                        <a href="javascript:;" onclick="javascript:submitFun();">追溯</a>
                    </form>
                </div>
                <div class="backdrop"></div>
            </div>
            <div class="bnr-so-erro" id="spanTip"></div>
        </div>
    </div>
</div> 
<div class="wrapper pagebg">   
    <div class="w-main">
        <div class="w-main-ul">
        	<div class="block30"></div>
            <div class="hd"><h2>产品生产信息</h2></div>
            <div class="bd">
                <ul class="infolist">
                    <li id="productName"></li>
                    <li id="brand" ></li>
                    <li id="qualityGrade"></li>
                </ul>
                <ul class="infolist">
                    <li id="productEnterpriseName"></li>
                </ul>
                <ul class="infolist daline">
                   <li id="traceSource"></li>
                    <li id="batchName"></li>
                    <li id="produceDate"></li>
                    <li id="warrantDate"></li>
                </ul>
            </div>
        </div>
        <div class="w-main-box" id="productAppendix">
           
        </div>
       
        <div class="w-main-ul">
            <div class="hd"><h2>生产基地信息</h2></div>
            <div class="bd">
                <ul class="infolist">
                    <li id="productBaseName" ></li>
                </ul>
                <ul class="infolist">
                    <li id="productBaseAddress"></li>
                </ul>
                <ul class="infolist">
                    <li id="type"></li>
                    <li id="area"></li>
                    <li id="buildDate"></li>
                </ul>
                <ul class="infolist">
                     <li id="resources">
                        
                    </li>
                </ul>
                <ul class="infolist daline">
                    <li id="environment">
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-main-box" id="productBaseAppendix">
        </div>
        <div class="w-main-ul">
            <div class="hd"><h2>生产企业信息</h2></div>
            <div class="bd">
                <ul class="infolist">
                     <li id="enterpriseName"></li>
                </ul>
                <ul class="infolist">
                    <li id="mainProduct"></li>
                </ul>
                <ul class="infolist">
                    <li id="organizationcode"></li>
                    <li id="businessLicenceCode"></li>
                </ul>
                <ul class="infolist">
                    <li id="telePhone"></li>
                    <li id="fax"></li>
                </ul>
                <ul class="infolist">
                    <li id="enterpriseAddress"></li>
                </ul>
                <ul class="infolist">
                    <li id="website"></li>
                </ul>
                <ul class="infolist daline">
                    <li id="enterpriseProfile"></li>
                </ul>
            </div>
        </div>
        <div class="w-main-box" id="enterpriseAppendix">
        	
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