<?php /* Smarty version 3.0rc1, created on 2010-06-27 05:00:43
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/answer_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:296594c26dafbbfac59-72278816%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a9507440d22efec822d0b5ec4294c7cdce169c90' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/answer_list.tpl',
      1 => 1277614844,
    ),
  ),
  'nocache_hash' => '296594c26dafbbfac59-72278816',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_answer')) include 'D:\Project\f-frameworks\p-one\public/../plugins\block.answer.php';
if (!is_callable('smarty_modifier_date_format')) include 'D:\Project\f-frameworks\library\smarty\plugins\modifier.date_format.php';
?>
<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;  float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<div style="float:right;width:68%;margin-top:4px;">
		<div style="font-weight:bold; padding:6px; line-height:140%;">
		<a href="/">首页</a> > <a href="/answer.php">预约/留言</a> > 留言 
		</div>
		<div class="fc"></div>
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>	
		<div style=" margin:20px; text-align:center; font-size:16px; font-weight:bold"><?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
</div>
		<div style="margin-top:10px; margin-bottom:10px;">
		<form  action="" method="post">
		<table width="98%" border="0">
		  <tr>
			<td>姓名：<input type="text" name="name" id="name" /></td>
		  </tr>
		  <tr>
			<td><textarea cols="50" rows="5" name="content" id="content" ></textarea></td>
		  </tr>
		  <tr>
			<td><input type="submit" value="留言" /></td>
		  </tr>
		</table>
		</form>
		</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('answer', array()); $_block_repeat=true; smarty_block_answer(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('answer')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
		<table width="98%" border="0">
		  <tr>
			<td style="border-bottom:1px #CC9900 dashed;"><?php if (''!=$_smarty_tpl->tpl_vars['value']->value['answer_user_name']){?><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_user_name'];?>
<?php }else{ ?>匿名客户<?php }?>于<?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['answer_create_time'],"%Y-%m-%d");?>
提问：</td>
		  </tr>
		  <tr>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_content'];?>
</td>
		  </tr>
		  <?php if ($_smarty_tpl->tpl_vars['value']->value['answer']){?>
		  <tr>
			<td style="border:1px #CC9900 solid;">网站管理答复：
				<table width="98%" border="0" >
				  <tr>
					<td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer']['answer_content'];?>
</td>
				  </tr>
				</table>
			</td>
		  </tr>
		  <?php }?>
		</table>
		<div style="margin-top:10px;"></div>
		<?php }} ?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_answer(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div>