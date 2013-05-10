<?php /* Smarty version 3.0rc1, created on 2010-12-05 07:26:02
         compiled from "D:\Project\f-project\p-three\public/../view/admin/news/category_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:157404cfb3e8ad1d982-69952095%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cec0ef20ea617aa4995db8d507b30c4263db3ad8' => 
    array (
      0 => 'D:\\Project\\f-project\\p-three\\public/../view/admin/news/category_add.tpl',
      1 => 1276919268,
    ),
  ),
  'nocache_hash' => '157404cfb3e8ad1d982-69952095',
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
        <li class="selected"><span>添加文章类别</span></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>新增文章类别</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" name="title" id="title" class="ipt_wm ipt_tc" />
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
