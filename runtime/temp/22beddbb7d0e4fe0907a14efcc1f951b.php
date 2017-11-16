<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:68:"E:\phpStudy\WWW\hcx\public/../application/home\view\index\index.html";i:1505915362;s:69:"E:\phpStudy\WWW\hcx\public/../application/home\view\public\r_nav.html";i:1506000260;s:69:"E:\phpStudy\WWW\hcx\public/../application/home\view\public\t_nav.html";i:1506001786;s:69:"E:\phpStudy\WWW\hcx\public/../application/home\view\public\b_nav.html";i:1506000236;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>广州市惠焯烜服装设计有限公司</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/index.css">
		<script src="__STATIC__/home/js/banner.js"></script>
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
							<a href="/home/index/index"><img src="__STATIC__/home/pic/i9es.png" class="img-responsive" alt="Cinque Terre"></a>
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
			</div>
				<!-- 轮播图 -->
				<div class="container">
				<div class="row">
					<div class="col-md-12" id="lunbo">
						<div class="banner">
						    <ul class="banner1">
						    	<?php foreach($banner as $v): ?>
						        <li class="actrve">
						            <a href="/home/product/index"><img src="__STATIC__/home/pic/banner/<?php echo $v['img']; ?>" class="img-responsive" alt=""></a>
						        </li>
						       	<?php endforeach; ?>					        
						    </ul>
						    <ul class="lunbo">
						    	<?php if(is_array($banner) || $banner instanceof \think\Collection || $banner instanceof \think\Paginator): if( count($banner)==0 ) : echo "" ;else: foreach($banner as $k=>$vo): ?>
						        <li class="actrve"><?php echo $k+1; ?></li>
						        <?php endforeach; endif; else: echo "" ;endif; ?>
						    </ul>
						    <div class="left">上一页</div>
						    <div class="right">下一页</div>
						</div>
					</div>
				</div>
			</div>
			<!-- 关于我们 -->
			<nav class="navbar-default" role="navigation">
				<div class="container">
				<div class="row">
					<!-- 左边 -->
					<div class="col-md-6">
						<div id="about">
							<div id="pen"></div>
							<h1 class="text-center">ABOUT US</h1>
							<h5 class="text-center">关于我们</h5>
						</div>
						<div id="preset">
							<p>&nbsp;&nbsp;&nbsp;&nbsp;广州市惠焯烜服装设计有限公司是一家大型的专业从事皮草皮革服装以及相关产品研发设计生产销售为一体的服饰公司，并拥有专业的生产线管理完善的工厂，企业的长远规划为公司打造百年品牌奠定了坚实基础。<br/>
							&nbsp;&nbsp;&nbsp;&nbsp;公司始终坚持产品的创新，差异化；市场的整合，全局化；利益共享化，在变化中找准自我定位的经营理念，以追求客户最大满意为服务宗旨，紧随时代流行趋势使各类服饰产品始终走在市场前沿，做到款款流行。公司拥有各类先进制衣设备和优厚的基础设施，拥有一支数千人的精良队伍。公司按国际质量体系进行先进的生产管理，生产原料的严格筛先，生产过程的全程控制，保证了产品的高质量......
							</p>
						</div>
						<div id="b">
							<div id="bu">
							<form action="/home/about/index" method="get">
								<input id="but" type="submit" value="MORE++">
							</form>
							</div>
						</div>
					</div>
					<!-- 右边 -->
					<div class="col-md-6">
						<div id="picb1">
							<a href="/home/about/index"><img src="__STATIC__/home/pic/1_01-1_5112_tzw7.jpg" class="img-responsive"></a>
						</div>
						<div id="picb2">
							<a href="/home/about/index"><img src="__STATIC__/home/pic/1_01-1_5113_n648.jpg" class="img-responsive"></a>
						</div>
					</div>
				</div>
				</div>
			</nav>
			<!-- 我们的产品 -->
			<nav class="navbar-inverse" role="navigation">
				<div class="container">
				<div class="row">
					<div class="col-md-5">
						<a href="/home/product/index"><h1>OUR PRODUCTS</h1></a>
						<a href="/home/product/index"><h5>我们的产品</h5></a>
					</div>
					<!-- 导航 -->
				<nav class="navbar-default" role="navigation">
					<div class="col-md-7">
						<ul class="nav-justified">
							<?php if(is_array($nav) || $nav instanceof \think\Collection || $nav instanceof \think\Paginator): if( count($nav)==0 ) : echo "" ;else: foreach($nav as $key=>$vo): if(($vo['state'] == 2)): ?>
							<li>
								<a href="/home/product/index?name=<?php echo $vo['name']; ?>"><span><?php echo $vo['name']; ?></span></a>
							</li>
							<?php endif; endforeach; endif; else: echo "" ;endif; ?>
						</ul>		
					</div>
				</nav>
			<div class="container">
				<div class="col-md-12">
					<div id="product">
						<div>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro1.png" class="img-responsive"></a>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro2.png" class="img-responsive"></a>
						</div>
						<div>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro3.png" class="img-responsive"></a>
						</div>	
						<div>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro4.png" class="img-responsive"></a>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro5.png" class="img-responsive"></a>
						</div>
						<div>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro6.png" class="img-responsive"></a>
							<a href="/home/product/index"><img src="__STATIC__/home/pic/pro7.png" class="img-responsive"></a>
						</div>
					</div>
				</div>
			</div>

			<!-- 新闻 -->
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<a href="/home/news/index"><h1>NEWS INFORMATION</h1></a>
						<a href="/home/news/index"><h5>新闻动态</h5></a>
						<a href="/home/news/index"><img src="__STATIC__/home/pic/ohtl.jpg" class="img-responsive"></a>
					</div>
					<div class="col-md-6">
						<table class="table">
							<caption><h3>| <a href="">公司新闻</a></h3></caption>
							<?php if(is_array($new) || $new instanceof \think\Collection || $new instanceof \think\Paginator): if( count($new)==0 ) : echo "" ;else: foreach($new as $key=>$vo): ?>
							<tr>
								<td>
									<a href="/home/newsdet/index?id=<?php echo $vo['id']; ?>"><h5><?php echo $vo['name']; ?></h5></a>
									<h6><?php echo date("Y-m-d H:i:s",$vo['time']); ?></h6>
									<h5><?php echo $vo['title']; ?></h5>
								</td>
							</tr>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</table>
					</div>
				</div>
			</div>
				<!-- 友情链接 -->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<ul>
							<li><h4>友情链接：</h4></li>
							<?php if(is_array($link) || $link instanceof \think\Collection || $link instanceof \think\Paginator): if( count($link)==0 ) : echo "" ;else: foreach($link as $key=>$vo): ?>
							<li><a href="<?php echo $vo['link']; ?>"><h5><?php echo $vo['name']; ?></h5></a></li>
							<?php endforeach; endif; else: echo "" ;endif; ?>
						</ul>
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