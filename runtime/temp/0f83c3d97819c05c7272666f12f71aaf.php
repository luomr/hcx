<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:74:"D:\phpStudy\WWW\hcx\public/../application/home\view\register\register.html";i:1506001770;s:69:"D:\phpStudy\WWW\hcx\public/../application/home\view\public\b_nav.html";i:1506000235;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>注册</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/register.css">
	</head>
	<body>
		<nav class="navbar-default" role="navigation">
			<div class="container">
				<div class="row" id="tow">
					<div class="col-md-12">
						<a href="/home/index/index"><img src="__STATIC__/home/pic/i9es.png" class="img-responsive" alt="Cinque Terre"></a>
						<div class="col-md-2">
							<h4>已有账号<a href="<?php echo url('login/index'); ?>">去登录</a></h4>
						</div>
					</div>
					<div class="col-md-offset-2 col-md-8">
            <div class="row">
						  <div class="col-md-12 text-center"><h1>用户注册</h1></div>
              <div class="col-md-12">
						<form class="form-horizontal" role="form" action="<?php echo url('register/register'); ?>" method="post">
  							<div class="form-group">
    							<label class="col-md-4 control-label">用户名：</label>
    							<div class="col-md-7 col-lg-5">
      								<input class="form-control" name="name" id="inputError" type="text" value="" placeholder="用户名">
    							</div><h5>* <?php echo $name2; ?><?php echo $name; ?></h5>
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
    							</div><h5>* <?php echo $pass; ?><?php echo $pass2; ?></h5>
  							</div>
                <div class="form-group">
                  <label class="col-md-4 control-label">年龄：</label>
                  <div class="col-md-7 col-lg-5">
                      <input class="form-control" name="age" id="inputError" type="text" value="" placeholder="请输入年龄">
                  </div><h5><?php echo $age; ?></h5>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">性别：</label>
                  <div class="col-md-7 col-lg-5">
                      男：<input type="radio" value="男" name="sex" />
                      女：<input type="radio" value="女" name="sex" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">手机号：</label>
                  <div class="col-md-7 col-lg-5">
                      <input class="form-control" name="phone" id="inputError" type="text" value="" placeholder="请输入手机号">
                  </div><h5>* <?php echo $phone; ?></h5>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">邮箱：</label>
                  <div class="col-md-7 col-lg-5">
                      <input class="form-control" name="email" id="inputError" type="text" value="" placeholder="请输入邮箱">
                  </div><h5>* <?php echo $email; ?></h5>
                </div>
                <div class="form-group">
                  <label class="col-md-4 control-label">地址：</label>
                  <div class="col-md-7 col-lg-5">
                      <input class="form-control" name="address" id="inputError" type="text" value="" placeholder="请输入地址">
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
                  <label class="col-md-4 control-label"></label>
                  <div class="col-md-7 col-lg-5">
                      <input class="form-control" name="state" id="inputError" type="hidden" value="1" >
                  </div>
                </div>
  							<div class="form-group">
    						<div class="col-md-6 text-right">
      							<button type="reset" class="btn btn-default">重置</button>
    						</div>
    						<div class="col-md-6">
      							<button type="submit" class="btn btn-default">注册</button>
    						</div>
    						</div>
						</form>
            </div>
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