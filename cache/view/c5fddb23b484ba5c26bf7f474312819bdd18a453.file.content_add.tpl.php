<?php /* Smarty version 3.0rc1, created on 2010-06-19 11:35:19
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/case/content_add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131924c1cab771cd890-31353130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5fddb23b484ba5c26bf7f474312819bdd18a453' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/case/content_add.tpl',
      1 => 1276947314,
    ),
  ),
  'nocache_hash' => '131924c1cab771cd890-31353130',
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
        <h2>案例《<?php echo $_smarty_tpl->getVariable('case')->value['case_title'];?>
》- 新增图片</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post" enctype="multipart/form-data">
    <ul>
        <li>
        	<em>标题：</em>
        	<input type="text" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li><em>简介：</em>
        	<textarea cols="" name="intro" id="intro" rows="" class="ipt_wl"></textarea>
        </li>
        <li><em>图片：</em><input type="file" size="40" id="image" class="input_pic" name="image"></li>
            
        <li class="mt20">
        	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('case')->value['case_id'];?>
" name="cid" id="cid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
            <input type="reset" value="重置" class="btn btn_blue ml10" />
        </li>
    </ul>
    </form>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
