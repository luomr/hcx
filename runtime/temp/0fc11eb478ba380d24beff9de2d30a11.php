<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:71:"D:\phpStudy\WWW\hcx\public/../application/admin\view\haibao\haibao.html";i:1506076507;}*/ ?>
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
  <div class="panel-head"><strong><span class="icon-key"></span> 产品信息</strong></div>
  <div class="padding border-bottom">  
  <button type="button" class="button border-yellow" onclick="window.location.href='<?php echo url('haibao/jump'); ?>'"><span class="icon-plus-square-o"></span> 添加产品</button>
  </div>  
  <div class="body-content">
    <table class="table table-border table-bordered table-bg">
    <thead>
      <tr class="text-c">
        <th>id</th>
        <th>海报</th>
        <th>关联页面</th>
        <th>状态(1:启用,2:禁用)</th>
        <th>操作</th>
      </tr>
    </thead>
    <tbody>
      <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): if( count($list)==0 ) : echo "" ;else: foreach($list as $key=>$vo): ?>
      <tr class="text-c">
        <td ><?php echo $vo['id']; ?></td>
        <td ><a href="<?php echo url("haibao/imgup"); ?>?id=<?php echo $vo['id']; ?>"><img src="__STATIC__/home/pic/<?php echo $vo['img']; ?>" width="100px" height="50px"></a></td>
        <td ><?php echo $vo['explain']; ?></td>
        <td ><?php echo $vo['state']; ?></td>
        <td align="center"><a href="<?php echo url('haibao/edit'); ?>?id=<?php echo $vo['id']; ?>">修改 </a> | <a href="<?php echo url('haibao/del'); ?>?id=<?php echo $vo['id']; ?>">删除</a></td>
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