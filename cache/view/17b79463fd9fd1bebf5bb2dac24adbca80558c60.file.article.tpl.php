<?php /* Smarty version 3.0rc1, created on 2010-06-26 07:59:36
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/article.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72194c25b36869e955-68990891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17b79463fd9fd1bebf5bb2dac24adbca80558c60' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/article.tpl',
      1 => 1277539176,
    ),
  ),
  'nocache_hash' => '72194c25b36869e955-68990891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_date_format')) include 'D:\Project\f-frameworks\library\smarty\plugins\modifier.date_format.php';
?>
<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;  float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<div style="float:right;width:68%;margin-top:4px;">
		<div style="font-weight:bold; padding:6px; line-height:140%;">
		<a href="/">首页</a> > 
		<?php if (''==$_GET['sid']){?>
		<a href="/list.php">装修文章</a> > <a href="/list.php?cid=<?php echo $_smarty_tpl->getVariable('cate')->value['category_id'];?>
"> <?php echo $_smarty_tpl->getVariable('cate')->value['category_title'];?>
</a> >
		<?php }?>
		<?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
　
		</div>
		<div class="fc"></div>
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>	
		<div style=" margin:20px; text-align:center; font-size:16px; font-weight:bold"><?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
</div>
		<?php if (''==$_GET['sid']){?>		
		<div style=" margin:10px; text-align:center;">发布日期：<?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('article')->value['article_create_time'],"%Y-%m-%d");?>
</div>
		<?php }?>
		<div style=" margin:20px; overflow:hidden"><?php echo $_smarty_tpl->getVariable('article')->value['article_content'];?>
</div>
	</div>
</div>