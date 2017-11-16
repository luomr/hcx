<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:72:"D:\wamp\www\huichaoxuan\public/../application/home\view\login\login.html";i:1506001596;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\b_nav.html";i:1506000235;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>欢迎登陆</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/login.css">
	</head>
	<body>
		<nav class="navbar-default" role="navigation">
		<div class="container">
			<div class="row" id="tow">
				<div class="col-md-2">
					<a href="/home/index/index"><img src="__STATIC__/home/pic/i9es.png" class="img-responsive" alt="Cinque Terre"></a>
				</div>
				<div class="col-md-12">
						<img src="__STATIC__/home/pic/qx9a8662_6rex.jpg" class="img-responsive" alt="Cinque Terre">
				</div>
				<div class="col-md-5">
					<div class="col-md-12 text-center">
						<p class="tit">欢迎登陆</p>
					</div>
					<div class="col-md-12 text-center">
					<form class="form-horizontal" role="form" action="<?php echo url('login/login'); ?>" method="post">
						<div class="form-group">
    						<div class="col-md-12">
      							<input type="text" class="form-control" name="name" autocomplete="off" id="name" placeholder="用户名">
    						</div>
 						 </div>
 						 <div class="form-group">
    						<div class="col-md-12">
      							<input type="password" class="form-control" name="pass" id="pass" placeholder="请输入密码" for="inputError">
    						</div>
 						 </div>
 						 <div class="form-group">
    						<div class="col-md-6">
      							<input type="text" class="form-control" name="code" id="code" placeholder="请输入验证码" for="inputError">
      							
    						</div>
    						<div class="col-md-6">
    							<img src="<?php echo captcha_src(); ?>" alt="captcha" width="120" height="32" onclick="this.src=this.src+'?'">
    						</div>
 						 </div>
 						<div class="form-group">
  							<div class="col-md-12">
     							<button type="submit" class="btn btn-default">登 录</button>
   							</div>
						</div>
					</form>
					</div>
					<div class="col-md-6 text-center">
						<a href="<?php echo url('register/jump'); ?>">忘记密码</a>
					</div>
					<div class="col-md-6 text-center">
						<a href="<?php echo url('register/index'); ?>">立即注册</a>
					</div>
				</div>
			</div>
		</div>
	</nav>
	<!-- 页尾 -->
			<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/nav.css">
	</head>
	<body>
		<nav class="navbar-collapse" role="navigation">
				<div class="row">
					<div class="col-md-12 text-center">
						<div id="rew_top">
							<div class="a">
							<div id="rew">
								<p>官方微信公众号</p>
								<img src="__STATIC__/home/pic/vuxt.jpg">
							</div>
							<div id="rew">
								<p>FREYR SKULD微信号</p>
								<img src="__STATIC__/home/pic/kaee.jpg">
							</div>
						</div>
						</div>
					</div>
					<div class="col-md-12">
						<p class="text-center">Copyright ©2004-2016 版权所有 © 广州市惠焯烜服装设计有限公司 未经许可 严禁复制粤ICP备16081974号-1 All Rights Reserved</p>
					</div>
				</div>
			</nav>
			</div>
	</body>
</html>
	</body>
</html>