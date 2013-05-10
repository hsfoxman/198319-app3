<?php /* Smarty version 3.0rc1, created on 2010-06-19 15:10:42
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/answer/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:290044c1cddf28db281-78253490%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c45faaa05a0c92bdc80f8c77a725b99c49a6aa7' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/answer/index.tpl',
      1 => 1276960242,
    ),
  ),
  'nocache_hash' => '290044c1cddf28db281-78253490',
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
		<li class="selected"><span>留言列表</span></a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>预约列表</h2>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>姓名</th>
			<th>问题</th>
			<th>提交时间</th>
			<th>答复状态</th>
            <th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('answer')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr <?php if (1==($_smarty_tpl->tpl_vars['key']->value+1)%2){?>class="tb_c3"<?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_user_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['answer_content'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['answer_create_time'],"%Y-%m-%d %H:%M");?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['value']->value['answer_from_id']>0){?><span>已答复</span><?php }else{ ?><span style="color:red">未答复</span><?php }?></td>
			<td><a href="/admin/answer/answer.php?aid=<?php echo $_smarty_tpl->tpl_vars['value']->value['answer_id'];?>
" title="答复">答复</a> | <a href="/admin/answer/index.php?action=delete&aid=<?php echo $_smarty_tpl->tpl_vars['value']->value['answer_id'];?>
" title="删除">删除</a></td>
		</tr>
		<?php }} ?>
	</table>
    <div class="pager">
	  	<div class="pager_list"><?php echo $_smarty_tpl->getVariable('answer')->value->pagecurrent;?>
/<?php echo $_smarty_tpl->getVariable('answer')->value->pages;?>
页 
	  		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('answer')->value->pages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = true;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['max'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] = 1;
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'] > 0 ? 0 : $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop']-1;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']) {
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'];
    if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] == 0)
        $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show'] = false;
} else
    $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'] = 0;
if ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['show']):

            for ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['start'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] = 1;
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] <= $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total'];
                 $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] += $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'], $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration']++):
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['rownum'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_prev'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] - $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index_next'] = $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['index'] + $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['step'];
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['first']      = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == 1);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['last']       = ($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['iteration'] == $_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['total']);
?>
	  		<?php if ($_smarty_tpl->getVariable('answer')->value->pagecurrent==$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1){?>
	  			<strong><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</strong> 
	  		<?php }else{ ?>
		  		<a href="/admin/answer/index.php?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</a> 
		  	<?php }?>
		  	<?php endfor; endif; ?>
	  	</div>
	</div>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
