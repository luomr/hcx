<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\wamp\www\huichaoxuan\public/../application/home\view\register\find.html";i:1506001763;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\b_nav.html";i:1506000235;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>修改密码</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/find.css">
	</head>
	<body>
		<nav class="navbar-default" role="navigation">
			<div class="container">
				<div class="row" id="tow">
					<div class="col-md-12">
						<a href="/home/index/index"><img src="__STATIC__/home/pic/i9es.png" class="img-responsive" alt="Cinque Terre"></a>
						<div class="col-md-2">
							<h4><a href="<?php echo url('login/index'); ?>">返去登录</a></h4>
						</div>
					</div>
					<div class="col-md-offset-2 col-md-8">
						<div class="col-md-12 text-center"><h1>找回密码</h1></div>
						<form class="form-horizontal" role="form" action="<?php echo url('register/find'); ?>" method="post">
  							<div class="form-group">
    							<label class="col-md-4 control-label">用户名：</label>
    							<div class="col-md-7 col-lg-5">
      								<input class="form-control" name="name" id="inputError" type="text" value="" placeholder="用户名">
    							</div>
  							</div>
  							<div class="form-group">
    							<label class="col-md-4 control-label">密码：</label>
    							<div class="col-md-7 col-lg-5">
      								<input class="form-control" name="pass1" id="inputError" type="password" value="" placeholder="请输入密码">
    							</div>
  							</div>
  							<div class="form-group">
    							<label class="col-md-4 control-label">确认密码：</label>
    							<div class="col-md-7 col-lg-5">
      								<input class="form-control" name="pass2" id="inputError" type="password" value="" placeholder="请确认密码">
    							</div>
  							</div>
  							<div class="form-group">
    							<label class="col-md-4 control-label">验证码：</label>
    							<div class="col-md-3">
      								<input class="form-control" name="code" id="inputError" type="text" value="" placeholder="请输入验证码">
    							</div>
                  <div class="col-md-4">
                    <img src="<?php echo captcha_src(); ?>" alt="captcha" width="100" height="32" onclick="this.src=this.src+'?'">
                  </div>
  							</div>
  							<div class="form-group">
    						<div class="col-md-6 text-right">
      							<button type="reset" class="btn btn-default">重置</button>
    						</div>
    						<div class="col-md-6">
      							<button type="submit" class="btn btn-default">修改</button>
    						</div>
    						</div>
						</form>
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