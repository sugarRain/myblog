
require(['jquery', 'jquery.lightbox','totop'], function($,lb){
	var $nav = $('#nav'),
	$navIcon = $('.nav-icon',$nav),
	$navMenuBox = $('.nav-menu-box',$nav),
	$navCloseIcon = $('.nav-close-icon',$nav),
	$portfolio = $('#portfolio'),
	$portfolioCards = $('.portfolio-cards',$portfolio);
	$navIcon.on('click',function(){
		$navMenuBox.animate({top:0});
	});
	$navCloseIcon.on('click',function(){
		$navMenuBox.animate({top:-192});
	});

//图片拉近
	var $mask = $('.mask'),
	$imgresponsive = $('.img-responsive');
	$portfolioCards.on('mouseover',function(){
		$(this).find($mask).stop().animate({opacity:0.85})
		$(this).find($imgresponsive).stop().animate({width:305,height:200,marginLeft:-15,marginTop:-10});
	});
	$portfolioCards.on('mouseout',function(){
		$(this).find($mask).stop().animate({opacity:0})
		$(this).find($imgresponsive).stop().animate({width:275,height:180,marginLeft:0,marginTop:0});
	});


//弹出层
	$portfolioCards.on('click', function(){
		lb.open({
			src: $(this).data('src'),
			width: $(this).data('width'),
			height: $(this).data('height'),
			index: $(this).data('index'),
			name: $(this).data('name')
		});
	});


	//nav滚动条
	$('.list2').on('click',function(){
		$('body,html').animate({scrollTop:830},900);
	});
	$('.list3').on('click',function(){
		$('body,html').animate({scrollTop:1500},1700);
	});
	$('.list4').on('click',function(){
		$('body,html').animate({scrollTop:2300},2600);
	});
	$('.list5').on('click',function(){
		$('body,html').animate({scrollTop:2900},3500);
	});
	$('.list6').on('click',function(){
		$('body,html').animate({scrollTop:4570},4400);
	});
	


//文章
	var $blogHeadSection = $('#blog .head-section');
	var iHeadSectionTop = $blogHeadSection.offset().top,
		iHeadSectionHeight = $blogHeadSection.height();
	var bLoad = true;//判断是否该加载新数据
	var bLoaded = false;//判断本次请求的数据是不是加载完毕
	var isEnd = false;//判断是不是加载完数据库中的所有数据
	var page = 0;//控制分页

	function getMinUl(){
		$blogList = $('.blog-list');
		var $minUl =  $blogList.eq(0);
		for(var i=1; i<$blogList.length; i++){
			if($blogList.eq(i).height() < $minUl.height()){
				$minUl = $blogList.eq(i);
			}
		}
		return $minUl;
	}



	$(window).on('scroll', function(){

		if($(window).height()+$(window).scrollTop() >= iHeadSectionTop+iHeadSectionHeight && !isEnd){
			if(bLoad){
				bLoad = false;
				$.get('welcome/get_articles?page='+page, function(res){
					if(!res.isEnd){
						for(var i=0; i<res.data.length; i++){
							var blog = res.data[i];
							var html = '<li class="blog-artical">'
											+ '<div class="blog-artical-pic">'
												+ '<a href="welcome/single?blog_id='+blog.blog_id+'"><img src="'+blog.blog_img+'" title="name" /></a>'
											+ '</div>'
											+ '<div class="blog-artical-info">'
												+ '<h3><a href="#">'+blog.title+'</a></h3>'
												+ '<span>'+blog.admin_name+' | <a href="#">13 comments</a></span>'
												+ '<p>'+blog.content+'</p>'
												+ '<a class="more-btn" href="welcome/single?blog_id='+blog.blog_id+'">See More</a>'
												+ '<div class="clearfix"> </div>'
											+ '</div>'
										+ '</li>';
							var $minUl = getMinUl();
							$minUl.append(html);
						}
						bLoaded = true;
						page += 6;
					}else{
						isEnd = true;
					}
				}, 'json');

			}

			var $minUl = getMinUl();
			if($(window).height()+$(window).scrollTop() >= $minUl.offset().top+$minUl.height() && bLoaded){
				bLoad = true;
				bLoaded = false;
			}
		}


	});








});

