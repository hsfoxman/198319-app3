{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/case/">产品列表</a></li>
        <li><a href="/admin/case/add.php">添加产品</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>产品《{$case['case_title']}》的图片列表</h2>
        <div class="item">
        	<input type="button" onclick="javascript:location.href='/admin/case/content_add.php?cid={$case['case_id']}'" value="新增图片" class="btn btn_orange ml10" />
		</div>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>图片说明</th>
			<th>缩略图</th>
			<th>录入时间</th>
            <th>操作</th>
		</tr>
		{foreach from = $casecontent->result item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['case_content_id']}</td>
			<td>{$value['case_content_title']}</td>
			<td><img src="/upload/case/{$value['case_content_image']}" width="70" height="70" /></td>
			<td>{$value['case_content_create_time']|date_format:"%Y-%m-%d %H:%M"}</td>
			<td>
				<a href="/admin/case/content.php?action=delete&cid={$value['case_content_case_id']}&pid={$value['case_content_id']}" title="删除">删除</a>
			</td>
		</tr>
		{/foreach}
	</table>
    <div class="pager">
	  	<div class="pager_list">{$casecontent->pagecurrent}/{$casecontent->pages}页 
	  		{section name=loop loop=$casecontent->pages}
	  		{if $casecontent->pagecurrent == $smarty.section.loop.index + 1}
	  			<strong>{$smarty.section.loop.index + 1}</strong> 
	  		{else}
		  		<a href="/admin/case/content.php?page={$smarty.section.loop.index + 1}">{$smarty.section.loop.index + 1}</a> 
		  	{/if}
		  	{/section}
	  	</div>
	</div>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}