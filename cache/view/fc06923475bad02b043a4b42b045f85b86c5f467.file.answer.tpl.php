<?php /* Smarty version 3.0rc1, created on 2010-06-27 07:08:10
         compiled from "D:\Project\f-frameworks\p-one\public/../view/default/answer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:219974c26f8dab8f442-77903912%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fc06923475bad02b043a4b42b045f85b86c5f467' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/default/answer.tpl',
      1 => 1277622490,
    ),
  ),
  'nocache_hash' => '219974c26f8dab8f442-77903912',
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
		<a href="/">首页</a> > <a href="/answer.php">预约/留言</a> 
		</div>
		<div class="fc"></div>
		<div style="border-bottom:1px #CC9900 solid; margin-right:10px;"></div>
		<div style="margin-top:10px; margin-bottom:10px;">如有疑问，您还可以<a href="/answer_list.php" style="color:#FF0000">留言咨询</a></div>
		<div style="margin-top:10px; margin-bottom:10px;">
		<form  action="" method="post">
		<table width="98%" border="0">
		  <tr>
			<td>姓名：<input type="text" name="name" id="name" /></td>
		  </tr>
		  <tr>
			<td>地址：<input type="text" name="address" id="address" /></td>
		  </tr>
		  <tr>
			<td>电话：<input type="text" name="phone" id="phone" /></td>
		  </tr>
		  <tr>
			<td>邮箱：<input type="text" name="email" id="email" /></td>
		  </tr>
		  <tr>
			<td>方便联系您的时间：<input type="text" name="touch_time" id="touch_time" /></td>
		  </tr>
		  <tr>
			<td>您的房间类型：<select name="type" id="type">
        		<option value="1">家居空间</option>
        		<option value="2">办公空间</option>
        		<option value="3">商业空间</option>
        		</select></td>
		  </tr>
		  <tr>
			<td>具体需要：<br/><textarea cols="50" rows="5" name="content" id="content" ></textarea></td>
		  </tr>
		  <tr>
			<td><input type="submit" value="预约" /></td>
		  </tr>
		</table>
		</form>
		</div>
	</div>
</div>