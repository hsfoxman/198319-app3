{* 新闻管理 *}
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>		
        <li><a href="/admin/news/">文章列表</a></li>
        <li><a href="/admin/news/add.php">添加文章</a></li>
		<li class="selected"><span>文章类别</span></a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<form action="">
		<div class="form_simple">
        	<h2>类别列表</h2>
		</div>
	</form>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>类别名称</th>
            <th>操作</th>
		</tr>
		{foreach from = $category item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['category_id']}</td>
			<td>{$value['category_title']}</td>
			<td><a href="/admin/news/category_edit.php?cid={$value['category_id']}" title="编辑">编辑</a> | <a href="/admin/news/category.php?action=delete&cid={$value['category_id']}" title="删除">删除</a></td>
		</tr>
		{/foreach}
	</table>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}