<?php /* Smarty version 3.0rc1, created on 2010-08-01 07:31:52
         compiled from "D:\Project\f-project\p-one\public/../view/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9044c5522e812a112-46754276%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc8e64e238d91d98e259c53c233633a5838c8a71' => 
    array (
      0 => 'D:\\Project\\f-project\\p-one\\public/../view/admin/menu.tpl',
      1 => 1278745018,
    ),
  ),
  'nocache_hash' => '9044c5522e812a112-46754276',
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
