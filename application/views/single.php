<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>single</title>
	<base href="<?php echo site_url();?>">
	<link rel="stylesheet" href="css/common.css">
	<link rel="stylesheet" href="css/single.css">
	<link rel="stylesheet" href="css/totop.css">
</head>
<body>
	<div id="nav">
		<span class="nav-icon"></span>
		<div class="nav-menu-box">
			<div class="nav-menu-bg"></div>
			<ul  class="nav-menu">
				<li><a href="<?php echo 'welcome/index'; ?>">HOME</a></li>
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
	<div id="single">
		<div class="container">
			<img src="<?php echo $blogs[0] -> blog_img;?>" class="img-responsive" alt=""/>
	 	   	<p><?php echo $blogs[0] -> content;?> </p>
	 	    <ul class="comment-list">
  		    	<h5 class="post-author_head">Written by <a href="#" title="Posts by admin" rel="author"><?php echo $blogs[0] -> admin_name;?> </a></h5>
  		         <li><img src="<?php echo $blogs[0] -> admin_photo;?>" class="img-responsive" alt="">
  		           <div class="desc">
  		        	<p>View all posts by: <a href="" title="Posts by admin" rel="author"><?php echo $blogs[0] -> admin_name;?></a></p>
  		           </div>
  		           <div class="clearfix"></div>
  		        </li>
		  	</ul>
		  	<div class="comment">
		  		<span>好友评论 ：</span>
				<?php
					foreach($comments as $comment){
				?>
					<ul>
						<li class="comment_cot">
							<p class="content"><?php echo $comment -> subject; ?></p>
							<a href="#" class="name"><?php echo $comment -> name; ?></a>
							<span class="data"><?php echo $comment -> add_time; ?></span>
						</li>
					</ul>
				<?php
					}
				?>
			</div>
		  	<div class="comments-area">
		        <h3>Add New Comment</h3>
				<form action="welcome/comment?blog_id=<?php echo $blogs[0] -> blog_id;?>"method="post">
					<p>
						<label>Name</label>
						<span>*</span>
						<input type="text" value="" name="name">
					</p>
					<p>
						<label>Email</label>
						<span>*</span>
						<input type="text" value=""name="email">
					</p>
					<p>
						<label>Website</label>
						<input type="text" value="" name="website">
					</p>
					<p>
						<label>Subject</label>
						<span>*</span>
						<textarea name="subject"></textarea>
					</p>
					<p>
						<input type="submit" id = "submit"value="Submit Comment" src="#">
					</p>
				</form>
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
	<script src="js/require.js" data-main="js/single.js"></script>
</body>
</html>