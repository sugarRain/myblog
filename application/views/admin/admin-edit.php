<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Amaze UI Admin table Examples</title>
  <meta name="description" content="这是一个 table 页面">
  <meta name="keywords" content="table">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <meta name="renderer" content="webkit">
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <base href="<?php echo site_url();?>">


  <link rel="icon" type="image/png" href="assets/i/favicon.png">
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="assets/css/amazeui.min.css"/>
  <link rel="stylesheet" href="assets/css/admin.css">
</head>
<body>

<?php include 'admin-header.php'; ?>

<div class="am-cf admin-main">
  <?php include 'admin-sidebar.php'; ?>

  <!-- content start -->
  <div class="admin-content">
    <div class="am-g">
      <div class="am-u-sm-12">
          <tbody>
          <?php
            foreach($blogs as $message){
          ?>  
              <div class="comments-area">
                <h3>文章修改</h3>
              <form action="admin/comment?blog_id=<?php echo $blogs[0] -> blog_id;?>"method="post">
                <p>
                  <label>Name</label>
                  <span>*</span>
                  <input type="text" value="<?php echo $message -> author; ?>" name="name">
                </p>
                <p>
                  <label>title</label>
                  <input  type="text" value="<?php echo $message -> title; ?>" name="title">
                </p>
                <p>
                  <label>content</label>
                  <span>*</span>
                  <textarea  name="content"><?php echo $message -> content; ?></textarea>
                </p>
                <p>
                  <input type="submit" id = "submit"value="Submit Comment" src="#">
                </p>
              </form>
            </div>

            <?php
            }
          ?>
          </tbody>
        </table>
      </div>

    </div>
  </div>
</div>

<a href="#" class="am-icon-btn am-icon-th-list am-show-sm-only admin-menu" data-am-offcanvas="{target: '#admin-offcanvas'}"></a>

<footer>
  <hr>
  <p class="am-padding-left">© 2014 AllMobilize, Inc. Licensed under MIT license.</p>
</footer>
<script src="assets/js/jquery.min.js"></script>
<!--<![endif]-->
<script src="assets/js/amazeui.min.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>