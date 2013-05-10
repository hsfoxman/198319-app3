<?php /* Smarty version 3.0rc1, created on 2010-11-14 03:35:07
         compiled from "D:\Project\f-project\p-three\public/../view/default/left.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184034cdf58eb938ce0-61102718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1097f54199b77af32fc1355ad0170072d69e2a4c' => 
    array (
      0 => 'D:\\Project\\f-project\\p-three\\public/../view/default/left.tpl',
      1 => 1284905770,
    ),
  ),
  'nocache_hash' => '184034cdf58eb938ce0-61102718',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_category')) include 'D:\Project\f-project\p-three\public/../plugins\block.category.php';
?>
<div style="float:left;width:29%; margin:2px; background-color:#FFFFCC">
	
	<div style="width:100%;text-align:left;">
		<div style="background-color:#FFCC66; font-weight:bold; padding:6px; margin:4px; color:#FFF">装修案例</div>
	
		<div style="padding-left:10px; padding-top:10px;">
			<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/moreitem_none.gif"/><a href="/case.php?type=1">家居空间</a>
		</div>
		<div style="padding-left:10px;padding-top:5px;">
			<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/moreitem_none.gif"/><a href="/case.php?type=2">办公空间</a>
		</div>
		<div style="padding-left:10px;padding-top:5px;">
			<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/moreitem_none.gif"/><a href="/case.php?type=3">商业空间</a>
		</div>
	</div>
	
	<div style="width:100%;text-align:left; margin-top:20px; ">
		<div style="background-color:#FFCC66; font-weight:bold; padding:6px; margin:4px; color:#FFF">装修文章</div>
		<?php $_smarty_tpl->smarty->_tag_stack[] = array('category', array()); $_block_repeat=true; smarty_block_category(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('category')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>	
			<div style="padding-left:10px; padding-top:10px;">
				<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/moreitem_none.gif"/>
				<a href="/list.php?cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['category_id'];?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value['category_title'];?>
</a>
			</div>
			<?php }} ?>
		<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_category(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>
	
	</div>
	
	<div style=" width:100%; text-align:left; margin-top:20px; ">
		<div style="background-color:#FFCC66; font-weight:bold; padding:6px; margin:4px;color:#FFF">联系我们</div>
		<div style="padding-left:10px; padding-top:10px; padding-bottom:20px; line-height:200%">
			地址：浦东台儿庄路558号2楼<br />
			电话：68953486 传真：58995226<br />
			手机：13818872187<br />
			网址：www.sh-yinghan.com<br />
			E-mail：yinghan8@163.com<br />
		</div>
	</div>
</div>