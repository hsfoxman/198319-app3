<?php /* Smarty version 3.0rc1, created on 2010-12-05 07:25:57
         compiled from "D:\Project\f-project\p-three\public/../view/admin/news/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:186684cfb3e85cb0e83-44901337%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cb8aca2618087169f8fd73c4fa97276ee4047ad' => 
    array (
      0 => 'D:\\Project\\f-project\\p-three\\public/../view/admin/news/add.tpl',
      1 => 1276932734,
    ),
  ),
  'nocache_hash' => '186684cfb3e85cb0e83-44901337',
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
        <li class="selected"><span>添加文章</span></li>
        <li><a href="/admin/news/category.php">文章类别</a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>新增文章</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li><em>标题：</em><input type="text" name="title" id="title" class="ipt_wm ipt_tc" /></li>
        <li><em>类别：</em>
        	<select name="cid" id="cid">
        		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        		<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['category_title'];?>
</option>
        		<?php }} ?>
        	</select>
        </li>
        <li><em>内容：</em>
        <?php echo $_smarty_tpl->getVariable('fck')->value->Create();?>

        </li>
        <li class=" mt20">
	        <input type="submit" value="确定" class="btn btn_orange" />
	        <input type="reset" value="重置" class="btn btn_blue ml10" />
	    </li>
    </ul>
    </form>
</div>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
