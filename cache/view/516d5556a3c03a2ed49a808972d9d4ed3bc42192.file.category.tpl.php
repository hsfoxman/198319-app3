<?php /* Smarty version 3.0rc1, created on 2010-06-19 03:40:16
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/news/category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:162764c1c3c20e95823-31249778%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '516d5556a3c03a2ed49a808972d9d4ed3bc42192' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/news/category.tpl',
      1 => 1276918458,
    ),
  ),
  'nocache_hash' => '162764c1c3c20e95823-31249778',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="box_chart">
	<div class="tab">
	<ul>		
        <li><a href="/admin/news/">文章列表</a></li>
        <li><a href="/admin/news/add.php">添加文章</a></li>
		<li class="selected"><span>文章类别</span></a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<form action="">
		<div class="form_simple">
        	<h2>类别列表</h2>
		</div>
	</form>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>类别名称</th>
            <th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr <?php if (1==($_smarty_tpl->tpl_vars['key']->value+1)%2){?>class="tb_c3"<?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['category_title'];?>
</td>
			<td><a href="/admin/news/category_edit.php?cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
" title="编辑">编辑</a> | <a href="/admin/news/category.php?action=delete&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
" title="删除">删除</a></td>
		</tr>
		<?php }} ?>
	</table>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
