<?php /* Smarty version 3.0rc1, created on 2010-06-27 03:45:16
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/case_content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:69124c26c94ca846b9-87086993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '27632b21de7ffd59dc64b3a4536d6aaf7ac497fa' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/case_content.tpl',
      1 => 1277610316,
    ),
  ),
  'nocache_hash' => '69124c26c94ca846b9-87086993',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;  float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


	<div style="float:right;width:68%;margin-top:4px;">
		<div style="font-weight:bold; padding:6px; line-height:140%;">
		<a href="/">首页</a> > <a href="/case.php">设计案例</a> 
		<?php if (1==$_smarty_tpl->getVariable('content')->value['case_type']){?>
		> <a href="/case.php?type=<?php echo $_smarty_tpl->getVariable('content')->value['case_content_case_id'];?>
">家居空间</a>
		<?php }elseif(2==$_smarty_tpl->getVariable('content')->value['case_type']){?>
		> <a href="/case.php?type=<?php echo $_smarty_tpl->getVariable('content')->value['case_content_case_id'];?>
">办公空间</a>
		<?php }elseif(3==$_smarty_tpl->getVariable('content')->value['case_type']){?>
		> <a href="/case.php?type=<?php echo $_smarty_tpl->getVariable('content')->value['case_content_case_id'];?>
">商业空间</a>
		<?php }?>
		</div>
		<div class="fc"></div>
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>	
		<div style=" margin:10px; text-align:center; font-size:16px; font-weight:bold"><?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
</div>
		<div class="fc"></div>
		<div style="text-align:center; margin-bottom:30px; margin-top:10px; font-size:16px;">
		<span >标题：<?php echo $_smarty_tpl->getVariable('content')->value['case_content_title'];?>
<br/></span>
		<span><?php if (''!=$_smarty_tpl->getVariable('content')->value['case_content_intro']){?>简介：<?php echo $_smarty_tpl->getVariable('content')->value['case_content_intro'];?>
<?php }?></span>
		</div>
		<div style="text-align:center">
			<img src="/upload/case/<?php echo $_smarty_tpl->getVariable('content')->value['case_content_image'];?>
" alt="<?php echo $_smarty_tpl->getVariable('content')->value['case_content_title'];?>
"/>
		</div>
	</div>
</div>