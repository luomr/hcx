<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\phpStudy\WWW\hcx\public/../application/admin\view\adminuser\edit.html";i:1505982012;}*/ ?>
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
    <form method="post" class="form-x" action="<?php echo url('adminuser/edits'); ?>"> 
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <input type="hidden" class="input w50" value="<?php echo $list['id']; ?>" name="id"/>
          <div class="tips"></div>
        </div>
      </div> 
      <div class="form-group">
        <div class="label">
          <label>用户名：</label>
        </div>
        <div class="field">
          <label style="line-height:33px;">
           <?php echo $list['username']; ?>
          </label>
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>管理权限：</label>
        </div>
        <div class="field" style="padding-top:8px;"> 
            超级管理 <input name="state"  type="radio" value="超级管理" <?php if($list['state'] == "超级管理") echo "checked=checked";?>/>
            普通管理 <input name="state"  type="radio" value="普通管理" <?php if($list['state'] == "普通管理") echo "checked=checked";?>/> 
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>禁用状态：</label>
        </div>
        <div class="field" style="padding-top:8px;"> 
            是 <input name="static"  type="radio" value="是" <?php if($list['static'] == "是") echo "checked=checked";?>/>
            否 <input name="static"  type="radio" value="否" <?php if($list['static'] == "否") echo "checked=checked";?>/> 
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