<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\wamp\www\huichaoxuan\public/../application/admin\view\about\about.html";i:1505963961;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="__STATIC__/admin/css/pintuer.css">
<link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
<script src="__STATIC__/admin/js/jquery.js"></script>
<script src="__STATIC__/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-key"></span> 新闻信息</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='<?php echo url('about/jump'); ?>'"><span class="icon-plus-square-o"></span> 添加新闻</button>
  <form action="<?php echo url('about/search'); ?>" method="post">
          <input type="text" placeholder="请输入搜索关键字" name="search" class="input" style="width:250px; line-height:17px;display:inline-block" />
          <input type="submit" value="搜索" class="button border-main icon-search" onclick="changesearch()" >
      </form>
  </div>  <div class="body-content">
    <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th>id</th>
        <th>缩略图</th>
        <th>内容介绍</th>
        <th>禁用状态</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
      <tr class="text-c">
        <td><?php echo $vo['id']; ?></td>
        <td><a href="<?php echo url("about/imgup"); ?>?id=<?php echo $vo['id']; ?>"><img src="__STATIC__/home/pic/<?php echo $vo['img']; ?>" width="100px" height="100px"></a></td>
        <td><?php echo $vo['content']; ?></td>
        <td><?php echo $vo['state']; ?></td>
        <td align="center"><a href="<?php echo url('about/edit'); ?>?id=<?php echo $vo['id']; ?>">修改 </a> | <a href="<?php echo url('about/del'); ?>?id=<?php echo $vo['id']; ?>">删除</a></td>
      </tr>
      <?php endforeach; endif; else: echo "" ;endif; ?>
    </table> 
    <div class="col-md-12 text-center">
     <ul class="pagination">
      <?php echo $page; ?>
      </ul>
    </div>
  </div>
</div>
</body></html>