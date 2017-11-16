<?php if (!defined('THINK_PATH')) exit(); /*a:4:{s:77:"D:\wamp\www\huichaoxuan\public/../application/home\view\news\new_details.html";i:1505958796;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\r_nav.html";i:1506000259;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\t_nav.html";i:1506000267;s:73:"D:\wamp\www\huichaoxuan\public/../application/home\view\public\b_nav.html";i:1506000235;}*/ ?>
<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>新闻详情</title>
		<link rel="stylesheet" type="text/css" href="__STATIC__/home/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="__STATIC__/home/css/news_details.css">
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
            <form action="<?php echo url('index/search'); ?>" method="post"class="form-inline" role="form">
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
            <h1>News information</h1>
          </div>
          <div class="col-md-12 text-center">
            <h3><strong><?php echo $new['name']; ?></strong></h3><br/>
            <h5>作者:<?php echo $new['author']; ?> | 发布时间: <?php echo date("Y-m-d H:i:s",$new['time']); ?> </h5><br/>
          </div>
          <div id="title" class="col-md-12">
            <span><?php echo $new['title']; ?> </span>
          </div>
          <div class="col-md-12">
           <img src="__STATIC__/home/pic/new/<?php echo $new['img']; ?>" class="img-responsive" alt="Cinque Terre">
          </div>
          <div class="col-md-12">
           <p><?php echo $new['new']; ?></p>
          </div>
          <!-- 评论 -->
          <div class="col-md-12">
            <form role="form" action="<?php echo url('newsdet/add'); ?>" method="post">
              <div class="form-group">
                <label></label>
                <input type="hidden" name="name" value="<?php echo \think\Session::get('username'); ?>">
              </div>
              <div class="form-group">
                <label></label>
                <input type="hidden" name="time" value="<?php echo time(); ?>">
              </div>
              <div class="form-group">
                <label></label>
                <input type="hidden" name="sid" value="<?php echo $new['id']; ?>">
              </div>
              <div class="form-group">
                <label><h3>写评论</h3></label>
                <textarea name="comment" value="" class="form-control" rows="3" placeholder="留点评论、、、"></textarea>
              </div>
            <div class="col-md-12 text-right">
              <input type="submit" value="发布评论" class="btn btn-default">
            </div>
            </form>
          </div>
          <div class="col-md-12">
            <table class="table table-bordered">
             <?php if(is_array($comment) || $comment instanceof \think\Collection || $comment instanceof \think\Paginator): if( count($comment)==0 ) : echo "" ;else: foreach($comment as $key=>$vo): if(!is_null($vo)): ?>
              <tr>
                <td>
                  <h4><?php echo $vo['name']; ?></h4>
                  <h6>时间：<?php echo date("Y-m-d H:i:s",$vo['time']); ?></h6>
                  <h5><?php echo $vo['comment']; ?></h5>
                </td>
              </tr>
              <?php endif; endforeach; endif; else: echo "" ;endif; ?>
            </table>
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