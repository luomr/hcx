<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wamp\www\huichaoxuan\public/../application/admin\view\index\index.html";i:1505963150;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>后台管理中心</title>  
    <link rel="stylesheet" href="__STATIC__/admin/css/pintuer.css">
    <link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
    <script src="__STATIC__/admin/js/jquery.js"></script>   
</head>
<body style="background-color:#f2f9fd;">
<div class="header bg-main">
  <div class="logo margin-big-left fadein-top">
    <h1><img src="__STATIC__/admin/images/y.jpg" class="radius-circle rotate-hover" height="50" alt="" />后台管理中心</h1>
  </div>
  <div class="head-l"><a class="button button-little bg-green" href="/home/index/index" target="_blank"><span class="icon-home"></span> 前台首页</a> &nbsp;&nbsp;<a class="button button-little bg-red" href="<?php echo url("login/loginout"); ?>"><span class="icon-power-off"></span> 退出登录</a> </div>
</div>
<div class="leftnav">
  <div class="leftnav-title"><strong><span class="icon-list"></span>菜单列表</strong></div>
  <h2><span class="icon-th"></span>基本信息</h2>
  <ul style="display:block">
    <li><a href="<?php echo url('index/info'); ?>" target="right"><span class="icon-caret-right"></span>网站信息</a></li>
    <li><a href="<?php echo url('adminuser/index'); ?>" target="right"><span class="icon-caret-right"></span>管理员信息</a></li>
    <li><a href="<?php echo url('user/index'); ?>" target="right"><span class="icon-caret-right"></span>用户信息</a></li>
    <li><a href="<?php echo url('cominfo/index'); ?>" target="right"><span class="icon-caret-right"></span>公司信息</a></li>
  </ul>   
  <h2><span class="icon-pencil-square-o"></span>页面管理</h2>
  <ul>
    <li><a href="<?php echo url('nav/index'); ?>" target="right"><span class="icon-caret-right"></span>页面导航</a></li>
    <li><a href="<?php echo url('classified/index'); ?>" target="right"><span class="icon-caret-right"></span>导航分类</a></li>
    <li><a href="<?php echo url('haibao/index'); ?>" target="right"><span class="icon-caret-right"></span>海报管理</a></li>
    <li><a href="<?php echo url('about/index'); ?>" target="right"><span class="icon-caret-right"></span>简介管理</a></li>
    <li><a href="<?php echo url('link/index'); ?>" target="right"><span class="icon-caret-right"></span>友情链接</a></li>
    <li><a href="<?php echo url('banner/index'); ?>" target="right"><span class="icon-caret-right"></span>首页轮播</a></li>
    <li><a href="<?php echo url('product/index'); ?>" target="right"><span class="icon-caret-right"></span>产品管理</a></li>  
    <li><a href="<?php echo url('productde/index'); ?>" target="right"><span class="icon-caret-right"></span>产品详情</a></li>    
    <li><a href="<?php echo url('news/index'); ?>" target="right"><span class="icon-caret-right"></span>新闻管理</a></li>
    <li><a href="<?php echo url('comment/index'); ?>" target="right"><span class="icon-caret-right"></span>评论管理</a></li>
    <li><a href="<?php echo url('recruitment/index'); ?>" target="right"><span class="icon-caret-right"></span>招聘管理</a></li> 
    <li><a href="<?php echo url('jianli/index'); ?>" target="right"><span class="icon-caret-right"></span>简历管理</a></li>      
  </ul>  
</div>
<script type="text/javascript">
$(function(){
  $(".leftnav h2").click(function(){
	  $(this).next().slideToggle(200);	
	  $(this).toggleClass("on"); 
  })
  $(".leftnav ul li a").click(function(){
	    $("#a_leader_txt").text($(this).text());
  		$(".leftnav ul li a").removeClass("on");
		$(this).addClass("on");
  })
});
</script>
<ul class="bread">
  <li><a href="<?php echo url('index/info'); ?>" target="right" class="icon-home"> 首页</a></li>
  <li><a href="" id="a_leader_txt">网站信息</a></li>
</ul>
<div class="admin">
  <iframe scrolling="auto" rameborder="0" src="<?php echo url('index/info'); ?>" name="right" width="100%" height="100%"></iframe>
</div>
<div style="text-align:center;">
</div>
</body>
</html>