<?php /* Smarty version 3.0rc1, created on 2010-06-26 14:32:54
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/case/edit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:228794c260f9663fb54-35239089%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f5622a6ac6f2997eff9985c7043f1884983d7557' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/case/edit.tpl',
      1 => 1277536590,
    ),
  ),
  'nocache_hash' => '228794c260f9663fb54-35239089',
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
        <li><a href="/admin/case/add.php">添加案例</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>修改案例</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" name="title" value="<?php echo $_smarty_tpl->getVariable('case')->value['case_title'];?>
" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li><em>类别：</em>
        	<select name="type" id="type">
        		<option value="1" <?php if (1==$_smarty_tpl->getVariable('case')->value['case_type']){?>selected="selected"<?php }?>>家居空间</option>
        		<option value="2" <?php if (2==$_smarty_tpl->getVariable('case')->value['case_type']){?>selected="selected"<?php }?>>办公空间</option>
        		<option value="3" <?php if (3==$_smarty_tpl->getVariable('case')->value['case_type']){?>selected="selected"<?php }?>>商业空间</option>
        		</select>
        </li>
        <li class=" mt20">
            <input type="hidden" value="<?php echo $_smarty_tpl->getVariable('case')->value['case_id'];?>
" name="cid" id="cid" />   
	        <input type="submit" value="确定" class="btn btn_orange" />
        </li>
    </ul>
    </form>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
