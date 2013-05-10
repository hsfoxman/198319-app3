<?php /* Smarty version 3.0rc1, created on 2010-11-14 03:35:23
         compiled from "D:\Project\f-project\p-three\public/../view/admin/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:312314cdf58fb24e9b8-93212403%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8fdd49a7f833ad7dcdc3ae73c4d4f2f857dfaa5d' => 
    array (
      0 => 'D:\\Project\\f-project\\p-three\\public/../view/admin/login.tpl',
      1 => 1283067366,
    ),
  ),
  'nocache_hash' => '312314cdf58fb24e9b8-93212403',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" />
<title><?php echo $_smarty_tpl->getVariable('SITE_TITLE')->value;?>
 - 后台系统 - 管理员登陆</title>
<link href="<?php echo $_smarty_tpl->getVariable('ADMIN_CSS_PATH')->value;?>
login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('ADMIN_JS_PATH')->value;?>
jquery.js"></script>
</head>
<body>
<form id="loginForm" method="post" action="/admin/login.php" autocomplete="off" target="_top"  />
<div id="main">
	<div id="title"><?php echo $_smarty_tpl->getVariable('SITE_TITLE')->value;?>
后台系统</div>
	<div id="login">
		<div class="lft">帐&nbsp;&nbsp;号：</div>
		<div class="rgt"><input type="text" name="userName" id="userName" value="" style="width:160px;" tabindex="1" /></div>
		<div class="lft">密&nbsp;&nbsp;码：</div>
		<div class="rgt"><input type="password" name="pwd" id="pwd" value="" style="width:160px;" tabindex="2" /></div>
		<div class="lft">验证码:</div>
		<div class="rgt"><input name="inumber" type="text" size="10" /> <img src="/admin/inumber.php" border="0" align="absmiddle" class="border" /></div>
	</div>
</div>
<div id="sub"><input type="image" src="/resource/admin/img/sub.jpg" name="submit" value="登录系统" tabindex="4" /></div>
</form>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('ADMIN_JS_PATH')->value;?>
login.js"></script>
</body>
</html>