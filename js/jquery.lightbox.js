define(['jquery'],function(){
	return {
		open: function(opt){

			var $popUp = $('<div class="pop-up" ></div>'),
			$div = $('<div class="lightbox-img"><div class="pop-close" ></div><div class="loading">loading</div></div>'),
		 	$popBodyBottom = $('<div class="pop-body-bottom"><span class="pop-body-left" >'+opt.name+'</span><span class="pop-body-right" >| '+opt.index+'/16</span></div>'),
		 	that = this,
		 	iWidth = opt.width,
			iHeight = opt.height;
			if(iWidth > 600){
				iHeight = 600*iHeight/iWidth;
				iWidth = 600;
			}else{
				iHeight = opt.height;
				iWidth = opt.width;
			}
			$popUp.appendTo(document.body).animate({opacity:0.85},function(){
				$div.animate({
					width: iWidth,
					height: iHeight,
					left: ($(window).width() - iWidth) / 2,
					top: ($(window).height() - iHeight) / 2
				}).appendTo(document.body);
				
			var oImg = new Image();//document.createElement('img');
			oImg.onload = function(){
				$div.children('.loading').hide();
				this.width = iWidth;
				this.height = iHeight;
				$div.append(oImg);
			};
			oImg.src = opt.src;
			$popBodyBottom.animate({
				width: iWidth,
				left: ($(window).width() - iWidth) / 2,
				top: ($(window).height() - iHeight) / 2 + iHeight
			}).appendTo(document.body);
			});
			$popUp.on('click',function(){
				that.close({
					popup: $popUp,
					div: $div,
					popbodyright: $popBodyBottom
				});
			});
			$div.children('.pop-close').on('click',function(){
				that.close({
					popup: $popUp,
					div: $div,
					popbodyright: $popBodyBottom
				});
			});
		},
		close: function(opt){
			$(opt.popup).remove();
			$(opt.div).remove();
			$(opt.popbodyright).remove();
		}
	};
});