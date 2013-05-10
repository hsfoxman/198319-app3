<?php /* Smarty version 3.0rc1, created on 2010-06-19 13:37:32
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/case/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:38094c1cc81c228211-00737803%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc25b10ba8c63f13e21509714ff8031176cbf9ba' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/case/content.tpl',
      1 => 1276954650,
    ),
  ),
  'nocache_hash' => '38094c1cc81c228211-00737803',
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
		<li><a href="/admin/case/">案例列表</a></li>
        <li><a href="/admin/case/add.php">添加案例</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>案例《<?php echo $_smarty_tpl->getVariable('case')->value['case_title'];?>
》的图片列表</h2>
        <div class="item">
        	<input type="button" onclick="javascript:location.href='/admin/case/content_add.php?cid=<?php echo $_smarty_tpl->getVariable('case')->value['case_id'];?>
'" value="新增图片" class="btn btn_orange ml10" />
		</div>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>缩略图</th>
			<th>录入时间</th>
            <th>操作</th>
		</tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('casecontent')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr <?php if (1==($_smarty_tpl->tpl_vars['key']->value+1)%2){?>class="tb_c3"<?php }?>>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_title'];?>
</td>
			<td><img src="/upload/case/<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_image'];?>
" width="70" height="70" /></td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['value']->value['case_content_create_time'],"%Y-%m-%d %H:%M");?>
</td>
			<td>
				<a href="/admin/case/content.php?action=delete&cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_case_id'];?>
&pid=<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_id'];?>
" title="删除">删除</a>
			</td>
		</tr>
		<?php }} ?>
	</table>
    <div class="pager">
	  	<div class="pager_list"><?php echo $_smarty_tpl->getVariable('casecontent')->value->pagecurrent;?>
/<?php echo $_smarty_tpl->getVariable('casecontent')->value->pages;?>
页 
	  		<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('casecontent')->value->pages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
	  		<?php if ($_smarty_tpl->getVariable('casecontent')->value->pagecurrent==$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1){?>
	  			<strong><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</strong> 
	  		<?php }else{ ?>
		  		<a href="/admin/case/content.php?page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</a> 
		  	<?php }?>
		  	<?php endfor; endif; ?>
	  	</div>
	</div>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
