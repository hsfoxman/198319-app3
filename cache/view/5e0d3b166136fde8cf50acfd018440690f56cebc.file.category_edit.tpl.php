<?php /* Smarty version 3.0rc1, created on 2010-06-19 03:48:21
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/news/category_edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:251754c1c3e05cdaf76-88435611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e0d3b166136fde8cf50acfd018440690f56cebc' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/news/category_edit.tpl',
      1 => 1276919298,
    ),
  ),
  'nocache_hash' => '251754c1c3e05cdaf76-88435611',
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
        <h2>修改文章类别</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" value="<?php echo $_smarty_tpl->getVariable('category')->value['category_title'];?>
" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li class=" mt20">
        	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('category')->value['category_id'];?>
" name="cid" id="cid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
        </li>
    </ul>
    </form>
</div>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
