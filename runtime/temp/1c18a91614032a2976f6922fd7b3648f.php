<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\wamp\www\huichaoxuan\public/../application/admin\view\about\edit.html";i:1505966341;}*/ ?>
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
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('about/edits'); ?>">  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="hidden" class="input w50" name="id" value="<?php echo $res['id']; ?>"/>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>详情：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="content" style="height:120px;" value=""><?php echo $res['content']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>禁用状态：</label>
        </div>
        <div class="field" style="padding-top:8px;"> 
            是 <input name="state"  type="radio" value="是" <?php if($res['state'] == "是") echo "checked=checked";?>/>
            否 <input name="state"  type="radio" value="否" <?php if($res['state'] == "否") echo "checked=checked";?>/> 
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