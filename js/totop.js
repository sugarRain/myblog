define(['jquery'],function(){
	var $toTop = $('<div id="toTop"> <span id="toTopHover"></span></div>').appendTo(document.body);
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100){
			$toTop.css('display','block');
		}else{
			$toTop.css('display','none');
		}
	});
	$toTop.on('click',function(){
		$('body,html').animate({scrollTop:0},1500);
	});
});