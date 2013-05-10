{* 新闻管理 *}
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li class="selected"><span>文章列表</span></a></li>
        <li><a href="/admin/news/add.php">添加文章</a></li>
         <li><a href="/admin/news/category.php">文章类别</a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>文章列表</h2>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>标题</th>
			<th>类别</th>
			<th>录入时间</th>
            <th>操作</th>
		</tr>
		{foreach from = $articles->result item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['article_id']}</td>
			<td>{$value['article_title']}</td>
			<td>{$category[$value['article_category_id']]}</td>
			<td>{$value['article_create_time']|date_format:"%Y-%m-%d %H:%M"}</td>
			<td><a href="/admin/news/edit.php?aid={$value['article_id']}" title="编辑">编辑</a> | <a href="/admin/news/index.php?action=delete&aid={$value['article_id']}" title="删除">删除</a></td>
		</tr>
		{/foreach}
	</table>
    <div class="pager">
	  	<div class="pager_list">{$articles->pagecurrent}/{$articles->pages}页 
	  		{section name=loop loop=$articles->pages}
	  		{if $articles->pagecurrent == $smarty.section.loop.index + 1}
	  			<strong>{$smarty.section.loop.index + 1}</strong> 
	  		{else}
		  		<a href="/admin/news/index.php?page={$smarty.section.loop.index + 1}">{$smarty.section.loop.index + 1}</a> 
		  	{/if}
		  	{/section}
	  	</div>
	</div>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}