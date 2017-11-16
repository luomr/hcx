<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:74:"D:\wamp\www\huichaoxuan\public/../application/admin\view\comment\edit.html";i:1505203177;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>修改内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="<?php echo url('comment/edits'); ?>">  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="hidden" class="input w50" value="<?php echo $res['id']; ?>" name="id"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="<?php echo $res['name']; ?>" name="name" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>评论时间：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="time" value="<?php echo $res['time']; ?>"/>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>评论内容：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="comment" style="height:120px;" value=""><?php echo $res['comment']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body></html>