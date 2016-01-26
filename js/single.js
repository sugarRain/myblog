require(['jquery','totop'], function($){
	var $nav = $('#nav'),
	$navIcon = $('.nav-icon',$nav),
	$navMenuBox = $('.nav-menu-box',$nav),
	$navCloseIcon = $('.nav-close-icon',$nav);
	$navIcon.on('click',function(){
		$navMenuBox.animate({top:0});
	});
	$navCloseIcon.on('click',function(){
		$navMenuBox.animate({top:-192});
	});

	// $('#submit').on('click',function(){
	// 	var $username = $('[name="name"]');
	// 	var $email = $('[name="email"]');
	// 	var $website = $('[name="website"]');
	// 	var $subject = $('[name="subject"]');
	// 	$.post('welcome/comment',{
	// 		name:$username.val(),
	// 		email:$email.val(),
	// 		website:$website.val(),
	// 		subject:$subject.val()
	// 	},function(res){
	// 		 var comment = res.data;
	// 		 if(res == "fail"){
	// 		 	alert('失败');
	// 		 }else{
	// 		 	$div = '<li class="comment_cot">'
	// 						+'<p class="content">'+comment.subject+'</p>'
	// 						+'<a href="#" class="name">'+comment.username+'</a>'
	// 						+'<span class="data">'+comment.add_time+'</span>'
	// 					+'</li>';
	// 					$ul.prepend($div);
	// 		 }
	// 	},'json')
	// });
});