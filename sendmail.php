<?php
require_once('mail.class.php');
$user_mail=@$_POST['txtemail'];
$content="欢迎新用户!";


$smtp = new smtp("smtp.163.com","25",true,"tiger3670","twt863233");
$smtp->debug =false;
$smtp->sendmail($user_mail,"tiger3670@163.com","来自3tian.co管理的信", $content, "HTML");
?>