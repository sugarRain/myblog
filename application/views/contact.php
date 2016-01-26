<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>contact</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/totop.css">
</head>
<body>
	<div id="nav">
		<span class="nav-icon"></span>
		<div class="nav-menu-box">
			<div class="nav-menu-bg"></div>
			<ul  class="nav-menu">
				<li><a href="#">HOME</a></li>
				<li><a href="#">ABOUT</a></li>
				<li><a href="#">SERVICES</a></li>
				<li><a href="#">PORTFOLIO</a></li>
				<li><a href="#">BLOG</a></li>
				<li><a href="#">CONTACT</a></li>
			</ul>
			<span class="nav-close-icon"></span>
		</div>
	</div>
	<div id="header"></div>
	<div id="contect">
		<div class="contect-body">
			<div class="contect-top">
				<div class="contect-left">
					<!-- <form method="post" action="welcome/message"> -->
			    	    <p class="comment-form-author"><label for="author">Your Name:</label>
			    	    	<input name="name" type="text" class="textbox">
				    	</p>
				        <p class="comment-form-author"><label for="author">Email:</label>
				     	   <input name="email" type="text" class="textbox" >
				        </p>
				        <p class="comment-form-author"><label for="author">Message:</label>
				    	  <textarea name="message"></textarea>
				        </p>
				        <input name="submit" type="button" id="submit" value="Submit">
			       <!--  </form> -->
				</div>
				<div class="contect-right">
					<h3>Address</h3>
				    <div class="address">
						<i class="pin_icon"></i>
					    <div class="contact_address">
						  Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum. Typi non
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="phone"></i>
					    <div class="contact_address">
						   1-25-2568-897
					    </div>
					    <div class="clearfix"></div>
					</div>
					<div class="address">
						<i class="mail"></i>
					    <div class="contact_email">
						  <a href="1023927588@qq.com">1023927588@qq.com</a>
					    </div>
					    <div class="clearfix"></div>
					</div>
				</div>
			</div>
			<div class="contect-map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="footer-body  aboutme-box">
			<div class="footer-left">
				<p>Template by <a href="http://w3layouts.com" target="_blank">W3layouts</a></p>
			</div>
			<div class="footer-right">
				<ul>
					<li><a href="#"><span class="face"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="dri"> </span></a></li>
					<li><a href="#"><span class="tech"> </span></a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<script src="js/require.js" data-main="js/contact.js"></script>
</body>
</html>