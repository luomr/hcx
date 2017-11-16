<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\wamp\www\huichaoxuan\public/../application/admin\view\cominfo\cominfo.html";i:1505464220;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 公司信息</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='<?php echo url('cominfo/jump'); ?>'"><span class="icon-plus-square-o"></span> 添加信息</button>
  </div>  <div class="body-content">
    <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th>id</th>
        <th>公司名称</th>
        <th>公司地址</th>
        <th>公司电话</th>
        <th>公司传真</th>
        <th>公司邮箱</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($cominfo) || $cominfo instanceof \think\Collection || $cominfo instanceof \think\Paginator): if( count($cominfo)==0 ) : echo "" ;else: foreach($cominfo as $key=>$vo): ?>
      <tr class="text-c">
        <td ><?php echo $vo['id']; ?></td>
        <td ><?php echo $vo['name']; ?></td>
        <td ><?php echo $vo['address']; ?></td>
        <td ><?php echo $vo['phone']; ?></td>
        <td ><?php echo $vo['fax']; ?></td>
        <td ><?php echo $vo['email']; ?></td>
        <td align="center"><a href="<?php echo url('cominfo/edit'); ?>?id=<?php echo $vo['id']; ?>">修改 </a> | <a href="<?php echo url('cominfo/del'); ?>?id=<?php echo $vo['id']; ?>">删除</a></td>
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