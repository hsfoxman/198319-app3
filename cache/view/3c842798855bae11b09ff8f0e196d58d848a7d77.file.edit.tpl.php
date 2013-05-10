<?php /* Smarty version 3.0rc1, created on 2010-06-19 07:32:59
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/news/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:265574c1c72ab317340-28074505%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c842798855bae11b09ff8f0e196d58d848a7d77' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/news/edit.tpl',
      1 => 1276932748,
    ),
  ),
  'nocache_hash' => '265574c1c72ab317340-28074505',
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
        <li><a href="/admin/news/category.php">文章类别</a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>编辑文章</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li><em>标题：</em><input type="text" value="<?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
" name="title" id="title" class="ipt_wm ipt_tc" /></li>
        <li><em>类别：</em>
        	<select name="cid" id="cid">
        		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
        		<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['category_id']==$_smarty_tpl->getVariable('article')->value['article_category_id']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['value']->value['category_title'];?>
</option>
        		<?php }} ?>
        	</select>
        </li>
        <li><em>内容：</em>
        <?php echo $_smarty_tpl->getVariable('fck')->value->Create();?>

        </li>
        <li class=" mt20">
        	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('article')->value['article_id'];?>
" name="aid" id="aid" />   
	        <input type="submit" value="确定" class="btn btn_orange" />
	    </li>
    </ul>
    </form>
</div>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
