<?php /* Smarty version 3.0rc1, created on 2010-06-26 07:16:50
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/case/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:261364c25a9624bea92-08141850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa143390280c455b2e43c7135f7a5689968264e4' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/case/add.tpl',
      1 => 1277536576,
    ),
  ),
  'nocache_hash' => '261364c25a9624bea92-08141850',
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
		<li><a href="/admin/case/">案例列表</a></li>
        <li class="selected"><span>添加案例</span></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>新增案例</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li><em>类别：</em>
        	<select name="type" id="type">
        		<option value="1">家居空间</option>
        		<option value="2">办公空间</option>
        		<option value="3">商业空间</option>
        		</select>
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
