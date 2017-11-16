<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 流年 <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用公共文件
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function email($email,$title,$content){
	$mail = new PHPMailer(true);
	try {
	// 服务器设置
	//$mail->SMTPDebug = 2; // 开启Debug
	$mail->isSMTP(); // 使用SMTP
	$mail->Host = 'smtp.qq.com'; // 服务器地址
	$mail->SMTPAuth = true; // 开启SMTP验证
	$mail->Username = '1597611951@qq.com'; // SMTP 用户名（你要使用的邮件发送账号）
	$mail->Password = 'btjetzcgygxoiedg'; // SMTP 密码
	$mail->SMTPSecure = 'ssl'; // 开启TLS 可选
	$mail->Port = 465; // 端口

	// 收件人
	$mail->setFrom('1597611951@qq.com'); // 来自
	//$mail->addAddress('395696661@qq.com'); // 添加一个收件人
	$mail->addAddress($email); // 可以只传邮箱地址


	// 附件
	//$mail->addAttachment('1.jpg'); // 添加附件
	//$mail->addAttachment('2.zip'); // 可以设定名字

	// 内容
	$mail->isHTML(true); // 设置邮件格式为HTML
	$mail->Subject = $title; //邮件主题
	$mail->Body = $content; //邮件内容

	$mail->send();
	return 1;
	} catch (Exception $e) {
		return 0;
	}
}

