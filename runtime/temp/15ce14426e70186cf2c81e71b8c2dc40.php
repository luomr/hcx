<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:69:"D:\phpStudy\WWW\hcx\public/../application/admin\view\cominfo\add.html";i:1505875655;}*/ ?>
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
    <form method="post" class="form-x" action="<?php echo url('cominfo/add'); ?>">  
      <div class="form-group">
        <div class="label">
          <label>公司名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="name" data-validate="required:请输入公司名称" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>公司地址：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="address" data-validate="required:请输入公司地址" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>公司电话：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="phone" data-validate="required:请输入公司电话" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>公司传真：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="fax" data-validate="required:请输入公司传真" />
          <div class="tips"></div>
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>公司邮箱：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" value="" name="email" data-validate="required:请输入公司邮箱" />
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