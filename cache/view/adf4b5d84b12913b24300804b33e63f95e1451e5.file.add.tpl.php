<?php /* Smarty version 3.0rc1, created on 2011-02-16 21:46:58
         compiled from "/home1/vhost/vh466791/www/yinghan/p-three/public/../view/admin/case/add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13473056784d5bd55252d083-78421594%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adf4b5d84b12913b24300804b33e63f95e1451e5' => 
    array (
      0 => '/home1/vhost/vh466791/www/yinghan/p-three/public/../view/admin/case/add.tpl',
      1 => 1297863387,
    ),
  ),
  'nocache_hash' => '13473056784d5bd55252d083-78421594',
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
		<li><a href="/admin/case/">产品列表</a></li>
        <li class="selected"><span>添加产品</span></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>新增产品</h2>
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
        		<option value="1">镀锌钢管</option>
        		<option value="2">PVC和PP-R管</option>
        		<option value="3">铝塑复合管</option>
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
