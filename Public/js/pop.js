var windowWidth,windowHeight,popstatus;
function whWindow() {
	windowWidth = $(window).width();
	windowHeight = $(window).height();
}

function popStatuRe() {
	var popw=(windowWidth/2)-200,poph=(windowHeight/2)-110;
	$('#wstatus').css({'left':popw+'px','top':poph+'px'});
}

$(window).resize(function() {
	whWindow();
	popStatuRe();
});

whWindow();

$(function(){
	$("#applythis").click(function(){
		$("#coverbg").css({display:"block",height:windowHeight});
		$("#wstatus").show();
		popStatuRe();
	});
	$("#xclose").click(function(){
		$("#wstatus").hide();
		$("#coverbg").hide();
	});
})