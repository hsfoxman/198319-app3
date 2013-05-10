<?php /* Smarty version 3.0rc1, created on 2010-07-10 07:05:09
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:130334c381ba542b111-14541340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a54c85bebd8caa0c4f6a9b467ff652ad6ef2d6a' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/header.tpl',
      1 => 1278745508,
    ),
  ),
  'nocache_hash' => '130334c381ba542b111-14541340',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo $_smarty_tpl->getVariable('SITE_CHARSET')->value;?>
" />
<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" />
<title></title>
<link href="<?php echo $_smarty_tpl->getVariable('ADMIN_CSS_PATH')->value;?>
frame.css" rel="stylesheet" type="text/css" />
<script src="<?php echo $_smarty_tpl->getVariable('ADMIN_JS_PATH')->value;?>
public.js"></script>
</head>
<body class="hd">
<div class="logo"></div>
<div class="user"><a href="#" class="c_yellow" onclick="return false;"><?php echo $_SESSION['admin_name'];?>
</a>，您好！欢迎使用本系统 [<a href="#" onclick="logout()">退出</a>]</div>
<ul class="nav">
	<li class="selected"><a href="#">瀛翰装饰</a></li>
</ul>
</body>
</html>
