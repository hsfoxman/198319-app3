<?php /* Smarty version 3.0rc1, created on 2010-08-01 07:31:31
         compiled from "D:\Project\f-project\p-one\public/../view/default/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:33934c5522d3da2924-35942891%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '637f0157cc40dfddf9d929abb11583ef1fe7161a' => 
    array (
      0 => 'D:\\Project\\f-project\\p-one\\public/../view/default/index.tpl',
      1 => 1278840582,
    ),
  ),
  'nocache_hash' => '33934c5522d3da2924-35942891',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_block_articles')) include 'D:\Project\f-project\p-one\public/../plugins\block.articles.php';
if (!is_callable('smarty_block_casecontent')) include 'D:\Project\f-project\p-one\public/../plugins\block.casecontent.php';
?>
<style type="text/css">
	.inner { width:655px;; height:224px; margin-top:10px;}
	.marquee { display:inline; float:left; margin-right:10px; margin-bottom:10px;}
	.marquee { border:1px solid #f1f1f1; width:100%; height:170px; overflow:hidden; line-height:30px; background:#f8f8f8;}
	.marquee li { width:160px; height:130px; text-align:center;}
	.marquee li img { margin:10px;}
	.level li { float:left;}
</style>
<div class="fc"></div>
<div style="background-color:#FFFFFF; width:984px;   float:left">
	
	<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('SITE_TPL_PATH')->value)."left.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<div style="float:right;width:68%;margin-top:4px;">
		
		<div style=" float: left; width:59%;">
			<div style="font-weight:bold; padding:6px; line-height:140% ">
				<span style="float:left;">公司概况</span>
				<span style="float:right;"><a href="/sp.php?sid=1"><img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/more.gif" /></a></span>
			</div>
			<div class="fc"></div>
			<div style="border-bottom:1px #CC9900 solid"></div>
			<div style="float:left; width:50%">
			<img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/company-left.gif" width="200px" />
			</div>
			<div style="float:left;width:49%; padding-top:4px; margin-top:4px;">
			　　上海居云建筑装潢工程有限公司成立于1997年，注册资金1000万元，法人代表：董助本，中共党员。本公司自成立以来，不断发展，抓质量、抓信誉、抓服务，一举成为沪上装潢业的佼佼者。公司在2000年成为上海市建筑装饰会员单位；2001年成为上海市装饰装修行业协会单位（T0207S）；同年获评上海市建筑业颁发家庭装潢国家二级资质证书。编号B3102262139057；届年被评为上海市家庭装饰设计团体会...
			</div>
		</div>
		
		<div style=" float: right; width:39%;">
			<div style="font-weight:bold; padding:6px; line-height:140% ">
				<span style="float:left;">装修文章</span>
				<span style="float:right;"><a href="list.php"><img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/more.gif" /></a></span>
			</div>
			<div class="fc"></div>
			<div style="border-bottom:1px #CC9900 solid; margin-right:6px;"></div>
			<div >
				<ul>
					<?php $_smarty_tpl->smarty->_tag_stack[] = array('articles', array()); $_block_repeat=true; smarty_block_articles(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

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
					<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_articles(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

				</ul>
			</div>
		</div>
		<div class="fc"></div>
		
		<div style="width:100%;">
			<div style="font-weight:bold; padding:6px; line-height:140% ">
				<span style="float:left;">装修案例</span>
				<span style="float:right;"><a href="/case.php"><img src="<?php echo $_smarty_tpl->getVariable('RESOURCE_PATH')->value;?>
default/images/more.gif" /></a></span>
			</div>
			<div class="fc"></div>
			<div style="border-bottom:1px #CC9900 solid; margin-right:6px;"></div>
			<div style="height:150px;">
				<div class="inner">
					<div class="marquee level" direction="left" speed="30" step="1" pause="1000">
					<ul>
						<?php $_smarty_tpl->smarty->_tag_stack[] = array('casecontent', array()); $_block_repeat=true; smarty_block_casecontent(array(), null, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl);while ($_block_repeat) { ob_start();?>

						<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('casecontent')->value->result; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if (count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
?>
						<li>
							<a href="/case_content.php?cid=<?php echo $_smarty_tpl->tpl_vars['value']->value['case_contetn_id'];?>
">
								<img src="/upload/case/<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['value']->value['case_content_title'];?>
" height="130px;">
							</a>
						</li> 
						<?php }} ?>
						<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_casecontent(array(), $_block_content, $_smarty_tpl->smarty, $_block_repeat, $_smarty_tpl); } array_pop($_smarty_tpl->smarty->_tag_stack);?>

					</ul>
					</div>
				</div>
			</div>
<script language="javascript">
$(document).ready(function(){  
     $(".marquee").marquee({  
         direction: "left",  
         step: 1,  
         pause: 1000  
     });  
});
</script>
		</div>
	</div>
</div>