function navStyle(id){$($($('.sub-lul li a')[id])).addClass('on');}
$(function(){
	$(".nav li a").hover(function(){
		var i=parseInt($(this).parent('li').index());
		$(".nav li a").eq(i-1).addClass("last");
		$(this).addClass("on");
	},function(){
 		$(".nav li a").removeClass("last");
 		$(".nav li a.end").addClass("last");
		$(this).removeClass("on");
	})
})