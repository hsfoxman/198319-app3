<?php /* Smarty version 3.0rc1, created on 2010-05-26 15:13:16
         compiled from "D:\Project\f-frameworks\app-shop\public/../view/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303104bfd3a8cc5fee8-10035883%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35e16eb2c2df99a0e95852ed637684db9db53cfe' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\app-shop\\public/../view/default/index.tpl',
      1 => 1274886796,
    ),
  ),
  'nocache_hash' => '303104bfd3a8cc5fee8-10035883',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
</head>
<body>
1
<?php  $_smarty_tpl->tpl_vars['val'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('columns')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['val']->key => $_smarty_tpl->tpl_vars['val']->value){
?>
<?php echo $_smarty_tpl->tpl_vars['val']->value['title'];?>

<?php }} ?>
</body>
</html>