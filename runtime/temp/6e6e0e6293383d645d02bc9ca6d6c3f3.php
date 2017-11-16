<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:72:"D:\wamp\www\huichaoxuan\public/../application/admin\view\index\info.html";i:1505705613;}*/ ?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="renderer" content="webkit">
    <title>网站信息</title>  
    <link rel="stylesheet" href="__STATIC__/admin/css/pintuer.css">
    <link rel="stylesheet" href="__STATIC__/admin/css/admin.css">
    <script src="__STATIC__/admin/js/jquery.js"></script>
    <script src="__STATIC__/admin/js/pintuer.js"></script>  
</head>
<body>
<div class="panel admin-panel">
  <div class="panel-head"><strong><span class="icon-pencil-square-o"></span> 网站信息</strong></div>
  <div class="body-content">
    <div class="page-container">
  <p class="f-20 text-success"><h3>欢迎：<?php echo \think\Session::get('name.username'); ?></h3></p>
  <p>本次登录IP：<?php echo $_SERVER['REMOTE_ADDR']; ?>  本次登录时间：<?php echo date("Y年m月d日 h:i:s",$_SERVER['REQUEST_TIME']); ?></p>
  <table class="table table-border table-bordered table-bg">
    <thead>
      <tr>
        <th colspan="7" scope="col">信息统计</th>
      </tr>
      <tr class="text-c">
        <th>统计</th>
        <th>资讯库</th>
        <th>图片库</th>
        <th>产品库</th>
        <th>用户</th>
        <th>管理员</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-c">
        <td>总数</td>
        <td>92</td>
        <td>9</td>
        <td>0</td>
        <td><?php echo $a; ?></td>
        <td>20</td>
      </tr>
    </tbody>
  </table>
  <table class="table table-border table-bordered table-bg mt-20">
    <thead>
      <tr>
        <th colspan="2" scope="col">服务器信息</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th width="30%">服务器计算机名</th>
        <td><span id="lbServerName"><?php echo $_SERVER['SERVER_NAME']; ?></span></td>
      </tr>
      <tr>
        <td>服务器IP地址</td>
        <td><?php echo $_SERVER['SERVER_ADDR']; ?></td>
      </tr>
      <tr>
        <td>服务器域名</td>
        <td><?php echo $_SERVER['SERVER_NAME']; ?></td>
      </tr>
      <tr>
        <td>服务器端口 </td>
        <td><?php echo $_SERVER['SERVER_PORT']; ?></td>
      </tr>
      <tr>
        <td>服务器IIS版本 </td>
        <td><?php echo $_SERVER['SERVER_SIGNATURE']; ?></td>
      </tr>
      <tr>
        <td>本文件所在文件夹 </td>
        <td><?php echo $_SERVER['SCRIPT_NAME']; ?></td>
      </tr>
      <tr>
        <td>系统所在文件夹 </td>
        <td><?php echo $_SERVER['SCRIPT_FILENAME']; ?></td>
      </tr>
    </tbody>
  </table>
</div>
<footer class="footer mt-20">
  <div class="container">
    <p>感谢jQuery、layer、laypage、Validform、UEditor、My97DatePicker、iconfont、Datatables、WebUploaded、icheck、highcharts、bootstrap-Switch<br>
      Copyright &copy;2015-2017 H-ui.admin v3.1 All Rights Reserved.<br>
      本后台系统由<a href="http://www.h-ui.net/" target="_blank" title="H-ui前端框架">H-ui前端框架</a>提供前端技术支持</p>
  </div>
</footer>
  </div>
</div>
</body></html>