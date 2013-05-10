{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li class="selected"><span>留言列表</span></a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>预约列表</h2>
	</div>
</div>
<div class="box_tb">
	<table class="tb_stand">
		<tr>
			<th>id</th>
			<th>姓名</th>
			<th>问题</th>
			<th>提交时间</th>
			<th>答复状态</th>
            <th>操作</th>
		</tr>
		{foreach from = $answer->result item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['answer_id']}</td>
			<td>{$value['answer_user_name']}</td>
			<td>{$value['answer_content']}</td>
			<td>{$value['answer_create_time']|date_format:"%Y-%m-%d %H:%M"}</td>
			<td>{if $value['answer_from_id'] > 0}<span>已答复</span>{else}<span style="color:red">未答复</span>{/if}</td>
			<td><a href="/admin/answer/answer.php?aid={$value['answer_id']}" title="答复">答复</a> | <a href="/admin/answer/index.php?action=delete&aid={$value['answer_id']}" title="删除">删除</a></td>
		</tr>
		{/foreach}
	</table>
    <div class="pager">
	  	<div class="pager_list">{$answer->pagecurrent}/{$answer->pages}页 
	  		{section name=loop loop=$answer->pages}
	  		{if $answer->pagecurrent == $smarty.section.loop.index + 1}
	  			<strong>{$smarty.section.loop.index + 1}</strong> 
	  		{else}
		  		<a href="/admin/answer/index.php?page={$smarty.section.loop.index + 1}">{$smarty.section.loop.index + 1}</a> 
		  	{/if}
		  	{/section}
	  	</div>
	</div>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}