<?php /* Smarty version 3.0rc1, created on 2010-07-10 06:57:16
         compiled from "D:\Project\f-frameworks\p-one\public/../view/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:155824c3819cce03156-43244269%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '05373d39c03a09413c8827169c48a5b0329520e3' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\p-one\\public/../view/admin/menu.tpl',
      1 => 1278745018,
    ),
  ),
  'nocache_hash' => '155824c3819cce03156-43244269',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="menu_box">
	<h2 onclick="show('1')">装修案例管理</h2>
	<ul id="menu_box_click_1" style="display:none">
		<li><a href="#" onclick="chgUrl('case/','mainFrame');">查看案例</a></li>
		<li><a href="#" onclick="chgUrl('case/add.php','mainFrame');">添加案例</a></li>
	</ul>
</div>
<div class="menu_box">
	<h2 onclick="show('2')">装修文章管理</h2>
	<ul id="menu_box_click_2" style="display:none">
		<li><a href="#" onclick="chgUrl('news/','mainFrame');">查看文章</a></li>
		<li><a href="#" onclick="chgUrl('news/add.php','mainFrame');">添加文章</a></li>
	</ul>
</div>
<div class="menu_box">
	<h2 onclick="show('3')">预约/留言管理</h2>
	<ul id="menu_box_click_3" style="display:none">
		<li><a href="#" onclick="chgUrl('answer/','mainFrame');">查看留言信息</a></li>
		<li><a href="#" onclick="chgUrl('order/','mainFrame');">查看预约信息</a></li>
	</ul>
</div>
<div class="menu_box">
	<h2 onclick="show('4')">独立页面管理</h2>
	<ul id="menu_box_click_4" style="display:none">
		<li><a href="#" onclick="chgUrl('news/sp.php?sid=1','mainFrame');">修改《企业概况》</a></li>
		<li><a href="#" onclick="chgUrl('news/sp.php?sid=2','mainFrame');">修改《企业荣誉》</a></li>
		<li><a href="#" onclick="chgUrl('news/sp.php?sid=3','mainFrame');">修改《联系我们》</a></li>
		<li><a href="#" onclick="chgUrl('news/sp.php?sid=4','mainFrame');">修改《服务承诺》</a></li>
		<li><a href="#" onclick="chgUrl('news/sp.php?sid=5','mainFrame');">修改《服务流程》</a></li>
	</ul>
</div>
<script language="javascript">
function show(id) {
	if ('none' == $('#menu_box_click_'+id).css('display')) {
		$('#menu_box_click_'+id).show();
	} else {
		$('#menu_box_click_'+id).hide();
	}
}
</script>
