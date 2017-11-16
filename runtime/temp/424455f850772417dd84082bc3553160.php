<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"D:\phpStudy\WWW\hcx\public/../application/admin\view\comment\comment.html";i:1505913006;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 评论信息</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='<?php echo url('comment/jump'); ?>'"><span class="icon-plus-square-o"></span> 添加评论</button>
  </div>  <div class="body-content">
    <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th>id</th>
        <th>用户</th>
        <th>评论时间</th>
        <th>评论内容</th>
        <th>新闻父id</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): if( count($res)==0 ) : echo "" ;else: foreach($res as $key=>$vo): ?>
      <tr class="text-c">
        <td><?php echo $vo['id']; ?></td>
        <td><?php echo $vo['name']; ?></td>
        <td><?php echo date("Y-m-d H:i:s",$vo['time']); ?></td>
        <td><?php echo $vo['comment']; ?></td>
        <td><?php echo $vo['sid']; ?></td>
        <td width="100px" align="center"><a href="<?php echo url('comment/edit'); ?>?id=<?php echo $vo['id']; ?>">修改 </a> | <a href="<?php echo url('comment/del'); ?>?id=<?php echo $vo['id']; ?>">删除</a></td>
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