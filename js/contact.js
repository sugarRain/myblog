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
//提交数据
	$('#submit').on('click',function(){
		var $username = $('[name="name"]');
		var $email = $('[name="email"]');
		var $message = $('[name="message"]');
		$.post('welcome/message',{
			name:$username.val(),
			email:$email.val(),
			message:$message.val()
		}, function(res){
			if(res == 'fail'){
				$username.css({
					border: '1px solid red'
				});

			}else{
				alert('成功');
			}
			
		});
	
	});
});