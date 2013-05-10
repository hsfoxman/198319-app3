<?php /* Smarty version 3.0rc1, created on 2010-06-19 14:16:02
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/order/show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:124894c1cd122cefe13-29689531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4840f51005519b26189b2f3822e9127a1b35edc5' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/order/show.tpl',
      1 => 1276956958,
    ),
  ),
  'nocache_hash' => '124894c1cd122cefe13-29689531',
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
		<li><a href="/admin/order/">预约列表</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>预约详细内容</h2>
	</div>
</div> 	
<div class="basic_data">
	 <ul>
        <li><em>姓名：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_name'];?>
</li>
        <li><em>地址：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_address'];?>
</li>
        <li><em>电话：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_phone'];?>
</li>
        <li><em>email：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_email'];?>
</li>
        <li><em>方便联系时间：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_touch_time'];?>
</li>
        <li><em>装修类型：</em>
        	<?php if (0==$_smarty_tpl->getVariable('order')->value['order_type']){?>
				家居空间
			<?php }elseif(1==$_smarty_tpl->getVariable('order')->value['order_type']){?>
				办公空间
			<?php }elseif(2==$_smarty_tpl->getVariable('order')->value['order_type']){?>
				商业空间
			<?php }?>
        </li>
        <li><em>内容：</em><?php echo $_smarty_tpl->getVariable('order')->value['order_content'];?>
</li>        
        <li><em>提交时间：</em><?php echo smarty_modifier_date_format($_smarty_tpl->getVariable('order')->value['order_create_time'],"%Y-%m-%d %H:%M");?>
</li>
        
    </ul>
</div>
<?php $_template = new Smarty_Internal_Template(($_smarty_tpl->getVariable('ADMIN_TPL_PATH')->value)."common/header.tpl", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
