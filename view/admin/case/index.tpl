{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li class="selected"><span>产品列表</span></a></li>
        <!--li><a href="/admin/case/add.php">添加案例</a></li-->
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>产品列表</h2>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>产品名称</th>
			<th>类别</th>
			<th>录入时间</th>
            <th>操作</th>
		</tr>
		{foreach from = $case->result item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['case_id']}</td>
			<td><a href="/admin/case/content.php?cid={$value['case_id']}" title="查看图片">{$value['case_title']}</a></td>
			<td>
				{if 1 == $value['case_type']}
					镀锌钢管
				{else if 2 == $value['case_type']}
					PVC和PP-R管
				{else if 3 == $value['case_type']}
					铝塑复合管
				{/if}
			</td>
			<td>{$value['case_create_time']|date_format:"%Y-%m-%d %H:%M"}</td>
			<td>
				<a href="/admin/case/content.php?cid={$value['case_id']}" title="查看图片">查看</a>
				| <a href="/admin/case/content_add.php?cid={$value['case_id']}" title="添加图片">添加产品图片</a>
				| <a href="/admin/case/edit.php?cid={$value['case_id']}" title="编辑">编辑</a> 
				| <a href="/admin/case/index.php?action=delete&cid={$value['case_id']}" title="删除">删除</a>
			</td>
		</tr>
		{/foreach}
	</table>
    <div class="pager">
	  	<div class="pager_list">{$case->pagecurrent}/{$case->pages}页 
	  		{section name=loop loop=$case->pages}
	  		{if $case->pagecurrent == $smarty.section.loop.index + 1}
	  			<strong>{$smarty.section.loop.index + 1}</strong> 
	  		{else}
		  		<a href="/admin/case/index.php?page={$smarty.section.loop.index + 1}">{$smarty.section.loop.index + 1}</a> 
		  	{/if}
		  	{/section}
	  	</div>
	</div>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}