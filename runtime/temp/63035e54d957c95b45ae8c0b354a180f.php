<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:70:"D:\wamp\www\huichaoxuan\public/../application/admin\view\nav\edit.html";i:1505872286;}*/ ?>
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
    <form method="post" class="form-x" action="<?php echo url('nav/edits'); ?>">  
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="hidden" class="input w50" name="id" value="<?php echo $list['id']; ?>" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>导航名：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="name" value="<?php echo $list['name']; ?>" data-validate="required:请输入导航名" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>链接地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="link" value="<?php echo $list['link']; ?>" data-validate="required:请输入链接地址" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>详情：</label>
        </div>
        <div class="field">
          <textarea type="text" class="input" name="explain" style="height:120px;" value=""><?php echo $list['explain']; ?></textarea>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>管理权限：</label>
        </div>
        <div class="field" style="padding-top:8px;"> 
            超级管理 <input name="state"  type="radio" value="正在使用" <?php if($list['state'] == "正在使用") echo "checked=checked";?>/>
            普通管理 <input name="state"  type="radio" value="已禁用" <?php if($list['state'] == "已禁用") echo "checked=checked";?>/> 
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