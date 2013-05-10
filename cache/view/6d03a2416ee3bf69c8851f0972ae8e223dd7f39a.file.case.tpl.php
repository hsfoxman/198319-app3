<?php /* Smarty version 3.0rc1, created on 2010-06-27 02:59:04
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/case.tpl" */ ?>
<?php /*%%SmartyHeaderCode:76664c26be787d9162-13922912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d03a2416ee3bf69c8851f0972ae8e223dd7f39a' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/case.tpl',
      1 => 1277564298,
    ),
  ),
  'nocache_hash' => '76664c26be787d9162-13922912',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_casecontent')) include 'D:\Project\f-frameworks\p-one\public/../plugins\block.casecontent.php';
?>
<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;  float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<div style="float:right;width:68%;margin-top:4px;">
		<div style="font-weight:bold; padding:6px; line-height:140%;">
		<a href="/">首页</a> > <a href="/case.php">设计案例</a> 
		<?php if (1==$_GET['type']){?>
		> 家居空间
		<?php }elseif(2==$_GET['type']){?>
		> 办公空间
		<?php }elseif(3==$_GET['type']){?>
		> 商业空间
		<?php }?>
		</div>
		<div class="fc"></div>
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>	
		<div style=" margin:10px; text-align:center; font-size:16px; font-weight:bold"><?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('casecontent', array('type'=>$_GET['type'],'page'=>$_GET['page'],'limit'=>12)); $_block_repeat=true; smarty_block_casecontent(array('type'=>$_GET['type'],'page'=>$_GET['page'],'limit'=>12), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

		<ul>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('casecontent')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
			<li style="float:left; width:25%;">
				<a href="/case_content.php?cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_id'];?>
">
					<img src="/upload/case/<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_title'];?>
" height="130px;" width="130px;">
				</a>
			</li>
			<?php }} ?>
		</ul> 
		<div class="fc"></div>
		<div class="pager">
			<div style=" float:right; margin-right:20px; margin-top:10px;"><?php echo $_smarty_tpl->getVariable('casecontent')->value->pagecurrent;?>
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
					<a href="/case.php?cid=<?php echo $_GET['cid'];?>
&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</a> 
				<?php }?>
				<?php endfor; endif; ?>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_casecontent(array('type'=>$_GET['type'],'page'=>$_GET['page'],'limit'=>12), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

	</div>
</div>