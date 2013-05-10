<?php /* Smarty version 3.0rc1, created on 2010-06-19 15:00:27
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/answer/answer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:314104c1cdb8b7ac873-53702448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f7b7d6ca72b3558e170fd1f4b6b7b7887bd7dda' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/answer/answer.tpl',
      1 => 1276959626,
    ),
  ),
  'nocache_hash' => '314104c1cdb8b7ac873-53702448',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\Project\f-frameworks\library\smarty\plugins\modifier.date_format.php';
?><?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/answer/">留言列表</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>答复留言</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
	<ul>
        <li><em>姓名：</em><?php echo $_smarty_tpl->getVariable('answerTo')->value['answer_user_name'];?>
</li>
        <li><em>内容：</em><?php echo $_smarty_tpl->getVariable('answerTo')->value['answer_content'];?>
</li>        
        <li><em>提交时间：</em><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('answerTo')->value['answer_create_time'],"%Y-%m-%d %H:%M");?>
</li>       
  		<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('answerTo')->value['answer_id'];?>
" name="toid" id="toid" />           
    </ul>
    <ul>
        <li><em>答复内容：</em><textarea id="content" name="content" cols="" rows="" class="ipt_wl"><?php echo $_smarty_tpl->getVariable('answer')->value['answer_content'];?>
</textarea></li>
        <li class=" mt20">
        	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('answer')->value['answer_id'];?>
" name="aid" id="aid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
            <input type="reset" value="重置" class="btn btn_blue ml10" />
        </li>
    </ul>
    </form>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
