<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:76:"D:\phpStudy\WWW\hcx\public/../application/admin\view\recruitment\jianli.html";i:1505912330;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 简历信息</strong></div>
  <div class="padding border-bottom">  
  </div>  <div class="body-content">
    <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th>id</th>
        <th>职位</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
      <tr class="text-c">
        <td><?php echo $vo['id']; ?></td>
        <td><?php echo $vo['job']; ?></td>
        <td align="center"><a href="__STATIC__/home/test/<?php echo $vo['path']; ?>">下载 </a> | <a href="<?php echo url('jianli/del'); ?>?id=<?php echo $vo['id']; ?>">删除</a></td>
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