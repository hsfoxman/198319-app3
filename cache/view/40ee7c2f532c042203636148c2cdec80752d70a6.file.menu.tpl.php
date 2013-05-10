<?php /* Smarty version 3.0rc1, created on 2010-06-08 16:13:12
         compiled from "D:\Project\f-frameworks\app-shop\public/../view/admin/menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:77744c0e6c185d5fa3-72612736%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40ee7c2f532c042203636148c2cdec80752d70a6' => 
    array (
      0 => 'D:\\Project\\f-frameworks\\app-shop\\public/../view/admin/menu.tpl',
      1 => 1276013592,
    ),
  ),
  'nocache_hash' => '77744c0e6c185d5fa3-72612736',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div class="menu_box">
	<h2><a href="#">商品管理</a></h2>
	<ul>
		<li><a href="#" onclick="chgUrl('goods/','mainFrame');">商品列表</a></li>
		<li><a href="#" onclick="chgUrl('category/','mainFrame');">商品分类</a></li>
		<li><a href="#" onclick="chgUrl('brand/','mainFrame');">商品品牌</a></li>
		<li><a href="#" onclick="chgUrl('model/','mainFrame');">商品类型</a></li>
	</ul>
</div>

<div class="menu_box">
	<h2><a href="#">促销管理</a></h2>
	<ul>
		<li><a href="#" onclick="chgUrl('goods/','mainFrame');">促销列表</a></li>
		<li><a href="#" onclick="chgUrl('category/','mainFrame');">团购管理</a></li>
	</ul>
</div>

<div class="menu_box">
	<h2><a href="#">推荐/广告管理</a></h2>
	<ul>
		<li><a href="#" onclick="chgUrl('goods/','mainFrame');">推荐管理</a></li>
		<li><a href="#" onclick="chgUrl('category/','mainFrame');">广告管理</a></li>
	</ul>
</div>

<div class="menu_box">
	<h2><a href="#">订单管理</a></h2>
</div>

<div class="menu_box">
	<h2><a href="#">文章管理</a></h2>
</div>

<div class="menu_box">
	<h2><a href="#">用户管理</a></h2>
</div>

<div class="menu_box">
	<h2><a href="#">报表统计</a></h2>
</div>

<div class="menu_box">
	<h2><a href="#">系统管理</a></h2>
	<ul>
		<li><a href="#" onclick="chgUrl('list/region.php','mainFrame');">地区列表</a></li>
		<li><a href="#" onclick="chgUrl('list/unit.php','mainFrame');">单位列表</a></li>
		<li><a href="#" onclick="chgUrl('list/money.php','mainFrame');">货币列表</a></li>
	</ul>
</div>