<?php /* Smarty version 3.0rc1, created on 2010-06-26 07:49:00
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:56664c25b0ec3e4596-41423353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e7149fa4235a86639e4b45bee136e73003ff5b63' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/list.tpl',
      1 => 1277538542,
    ),
  ),
  'nocache_hash' => '56664c25b0ec3e4596-41423353',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_category')) include 'D:\Project\f-frameworks\p-one\public/../plugins\block.category.php';
if (!is_callable('smarty_block_articles')) include 'D:\Project\f-frameworks\p-one\public/../plugins\block.articles.php';
?>
<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;  float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<div style="float:right;width:68%;margin-top:4px;">
		<div style="font-weight:bold; padding:6px; line-height:140%;">
		<a href="/">首页</a> > <a href="/list.php">装修文章</a> 
			<?php if (''!=$_GET['cid']){?>> 
			<?php $_smarty_tpl->smarty->_tag_stack[] = array('category', array('cid'=>$_GET['cid'])); $_block_repeat=true; smarty_block_category(array('cid'=>$_GET['cid']), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

			<a href="/list.php?cid=<?php echo $_smarty_tpl->getVariable('category')->value['category_id'];?>
"> <?php echo $_smarty_tpl->getVariable('category')->value['category_title'];?>
</a> 
			<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_category(array('cid'=>$_GET['cid']), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

			<?php }?>
		</div>
		<div class="fc"></div>	
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('articles', array('cid'=>$_GET['cid'],'page'=>$_GET['page'],'limit'=>20)); $_block_repeat=true; smarty_block_articles(array('cid'=>$_GET['cid'],'page'=>$_GET['page'],'limit'=>20), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

		<div>
			<ul>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('articles')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
				<li style=" line-height:160%; margin-right:6px; margin-top:6px; margin-bottom:6px;border-bottom:1px #cc9900 dashed">
					<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/news-title.gif" style="margin-right:6px;margin-left:6px;"><a href="/article.php?cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['article_category_id'];?>
&aid=<?php echo $_smarty_tpl->tpl_vars['value']->value['article_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['article_title'];?>
</a>
				</li>
				<?php }} ?>
			</ul>	
		</div>
		<div class="pager">
			<div style=" float:right; margin-right:20px; margin-top:10px;"><?php echo $_smarty_tpl->getVariable('articles')->value->pagecurrent;?>
/<?php echo $_smarty_tpl->getVariable('articles')->value->pages;?>
页 
				<?php unset($_smarty_tpl->tpl_vars['smarty']->value['section']['loop']);
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['name'] = 'loop';
$_smarty_tpl->tpl_vars['smarty']->value['section']['loop']['loop'] = is_array($_loop=$_smarty_tpl->getVariable('articles')->value->pages) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
				<?php if ($_smarty_tpl->getVariable('articles')->value->pagecurrent==$_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1){?>
						<strong><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</strong> 
				<?php }else{ ?>
					<a href="/list.php?cid=<?php echo $_GET['cid'];?>
&page=<?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
"><?php echo $_smarty_tpl->getVariable('smarty')->value['section']['loop']['index']+1;?>
</a> 
				<?php }?>
				<?php endfor; endif; ?>
			</div>
		</div>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_articles(array('cid'=>$_GET['cid'],'page'=>$_GET['page'],'limit'=>20), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

		
	</div>
</div>