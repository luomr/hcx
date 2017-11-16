<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"D:\phpStudy\WWW\hcx\public/../application/admin\view\haibao\add.html";i:1505959458;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

<link rel="stylesheet" href="__STATIC__/admin/css/pintuer.css">
<link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
<script src="__STATIC__/admin/js/jquery.js"></script>
<script src="__STATIC__/admin/js/pintuer.js"></script>
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>增加内容</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" enctype="multipart/form-data" action="<?php echo url('haibao/add'); ?>">  
      <div class="form-group">
        <div class="label">
          <label>图片：</label>
        </div>
        <div class="field">
          <input type="file" class="input w50" name="img" value=""  />
        </div>
      </div>
      <div class="form-group">
        <div class="label">
          <label>关联页面：</label>
        </div>
          <div class="field">
            <select name="explain" class="input w50">
              <option value="">请选择分类</option>
              <?php if(is_array($res) || $res instanceof \think\Collection || $res instanceof \think\Paginator): if( count($res)==0 ) : echo "" ;else: foreach($res as $key=>$vo): ?>
              <option value="<?php echo $vo['name']; ?>"><?php echo $vo['name']; ?></option>
              <?php endforeach; endif; else: echo "" ;endif; ?>
            </select>
            <div class="tips"></div>
          </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label>状态：</label>
        </div>
        <div class="field" style="padding-top:8px;"> 
            状态1： <input name="state"  type="radio" value="1"/>
            状态2： <input name="state"  type="radio" value="2"/> 
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