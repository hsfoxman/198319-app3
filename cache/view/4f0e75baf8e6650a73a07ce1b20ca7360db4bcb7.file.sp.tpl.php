<?php /* Smarty version 3.0rc1, created on 2010-06-19 07:26:53
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/news/sp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57374c1c713d304975-53553411%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f0e75baf8e6650a73a07ce1b20ca7360db4bcb7' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/news/sp.tpl',
      1 => 1276932406,
    ),
  ),
  'nocache_hash' => '57374c1c713d304975-53553411',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>

<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<div class="box_chart">
	<div class="tab">
	<ul>
		<?php if (1==$_smarty_tpl->getVariable('article')->value['article_type']){?>
			<li class="selected"><span>修改《企业概况》</span></a></li>
		<?php }else{ ?>
			<li><a href="/admin/news/sp.php?sid=1">修改《企业概况》</a></li>
		<?php }?>
		<?php if (2==$_smarty_tpl->getVariable('article')->value['article_type']){?>
			<li class="selected"><span>修改《企业荣耀》</span></a></li>
		<?php }else{ ?>
			 <li><a href="/admin/news/sp.php?sid=2">修改《企业荣耀》</a></li>
		<?php }?>
		<?php if (3==$_smarty_tpl->getVariable('article')->value['article_type']){?>
			<li class="selected"><span>修改《联系我们》</span></a></li>
		<?php }else{ ?>
			<li><a href="/admin/news/sp.php?sid=3">修改《联系我们》</a></li>
		<?php }?>
		<?php if (4==$_smarty_tpl->getVariable('article')->value['article_type']){?>
			<li class="selected"><span>修改《服务承诺》</span></a></li>
		<?php }else{ ?>
			<li><a href="/admin/news/sp.php?sid=4">修改《服务承诺》</a></li>
		<?php }?>
		<?php if (5==$_smarty_tpl->getVariable('article')->value['article_type']){?>
			<li class="selected"><span>修改《服务流程》</span></a></li>
		<?php }else{ ?>
			<li><a href="/admin/news/sp.php?sid=5">修改《服务流程》</a></li>
		<?php }?>
		            
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>编辑《<?php echo $_smarty_tpl->getVariable('article')->value['article_title'];?>
》</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li><em>内容：</em>
        <?php echo $_smarty_tpl->getVariable('fck')->value->Create();?>

        </li>
        <li class=" mt20">
        	<input type="hidden" value="<?php echo $_smarty_tpl->getVariable('article')->value['article_id'];?>
" name="aid" id="aid" />   
	        <input type="submit" value="确定" class="btn btn_orange" />
	    </li>
    </ul>
    </form>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
