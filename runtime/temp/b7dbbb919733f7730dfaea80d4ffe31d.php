<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:84:"D:\wamp\www\huichaoxuan\public/../application/home\view\product\product_details.html";i:1505958826;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\r_nav.html";i:1506000259;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\t_nav.html";i:1506000267;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\b_nav.html";i:1506000235;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>产品详情</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/product_details.css">
	</head>
	<body>
		<!-- 侧边导航 -->
      <!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
	</head>
	<script src="http://cdn.static.runoob.com/libs/jquery/1.10.2/jquery.min.js">
	<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/nav.css">
</script>
<script>
$(document).ready(function(){
	$(".tel").click(function(){
		$(".kefu").fadeToggle(1000);
	});
});
</script>
	<body>
		<div id="r_nav" class="text-center">
				<div id="one">
					<p>
						<a href="<?php echo url('index/index'); ?>">
							<img id="icon" src="__STATIC__/home/pic/h.png" class="img-responsive" alt="Cinque Terre">
		        			<span>主页</span>
	        			</a>
        			</p>
    			</div>
				<div>
					<p>
						<a href="<?php echo url('login/index'); ?>">
        					<img id="icon" src="__STATIC__/home/pic/u.png" class="img-responsive" alt="Cinque Terre">
        					<span>会员</span>
        				</a>
        			</p>
    			</div>
				<div>
					<p>
						<a href="###">
        					<img id="icon" class="tel" src="__STATIC__/home/pic/m.png" class="img-responsive" alt="Cinque Terre">
        					<span>客服</span>
        				</a>
        			</p>
    			</div>	
				<div>
					<p>
						<a href="">
        					<img id="icon" src="__STATIC__/home/pic/l.png" class="img-responsive" alt="Cinque Terre">
        					<span>留言</span>
        				</a>
        			</p>
    			</div>	
				<div>
					<p>
						<a href="">
        					<img id="icon" src="__STATIC__/home/pic/c.png" class="img-responsive" alt="Cinque Terre">
        					<span>购物车</span>
        				</a>
        			</p>
    			</div>	
			</div>
			<div class="kefu">
				<div class="ke">
					<h4>客服热线:
					86-020-83270720</h4>
					服务时间:[09:00-17:00]
				</div>
			</div>
	</body>
</html>
    <!-- 导航栏 -->
    <!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/nav.css">
	</head>
	<body>
		<nav class="navbar-default" role="navigation">
			<div class="container">
				<div class="row">
					<div class="col-md-1" id="logo">
							<img src="__STATIC__/home/pic/i9es.png">
					</div>
					
					<div class="col-md-8 ">
						<ul class="nav-justified">
							<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): if( count($nav)==0 ) : echo "" ;else: foreach($nav as $key=>$vo): if(($vo['state'] == 1)): ?>
							<li><a href="/home/<?php echo $vo['link']; ?>/index"><?php echo $vo['name']; ?></a></li>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>
					</div><div class="col-md-3">
						<ul class="nav-justified">
							<?php if(!session('username')): ?>
							<li>
								<a href="<?php echo url('login/index'); ?>">登录</a> 
								<a href="<?php echo url('register/index'); ?>">注册</a> 
							<?php else: ?>
							<a href="<?php echo url('register/user'); ?>"><?php echo \think\Session::get('username'); ?></a>,欢迎你 
							<a href="<?php echo url('login/loginout'); ?>">退出</a> 
							<?php endif; ?>
							</li>
						</ul>
					</div>
				</div>
			</div>
			</nav>
	</body>
</html>
      <!-- 搜索框 -->
      <div class="container">
        <div class="row">
            <form action="<?php echo url('index/search'); ?>" method="post" class="form-inline" role="form">
            <div class="col-md-3 col-md-offset-9">
              <div class="input-group" >
                    <input type="text" name="tit" class="form-control"  placeholder="请输入关键字">
                </div>
                    <button type="submit" class="btn btn-default">提交</button>
            </div>
          </form>
        </div>
      </div>
       <!-- 海报 -->
      <div class="row">
        <div class="col-md-12">
          <img src="__STATIC__/home/pic/<?php echo $img['img']; ?>" class="img-responsive" alt="Cinque Terre">
        </div>
      </div>
      <!-- 产品展示 -->
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h1>Product Center </h1>
          </div>
          <div class="col-md-12">
            <div class="col-md-5">
              <img src="__STATIC__/home/pic/product/<?php echo $product['img']; ?>" class="img-responsive" alt="Cinque Terre">
            </div>
            <div class="col-md-7">
              <h3><strong><?php echo $product['name']; ?></strong></h3>
              <hr/>
              <h4>价格: <strong>￥<?php echo $product['price']; ?></strong></h4>
              <h4>尺码：</h4>
              <h4>颜色：</h4>
            </div>
          </div>
          <div class="col-md-12">
            <div class="panel">
              <div class="panel-heading">
                <h3 class="panel-title">
                  <?php echo $product['explain']; ?>
                </h3>
              </div>
              <div class="panel-body">
                <?php echo $productde['content']; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
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