{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li class="selected"><span>预约列表</span></a></li>
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
			<th>装修类型</th>
			<th>电话</th>
			<th>录入时间</th>
            <th>操作</th>
		</tr>
		{foreach from = $order->result item = value key = key}
		<tr {if 1 == ($key + 1) % 2}class="tb_c3"{/if}>
			<td>{$value['order_id']}</td>
			<td>{$value['order_name']}</td>
			<td>
				{if 0 == $value['order_type']}
					家居空间
				{else if 1 == $value['order_type']}
					办公空间
				{else if 2 == $value['order_type']}
					商业空间
				{/if}
			</td>
			<td>{$value['order_phone']}</td>
			<td>{$value['order_create_time']|date_format:"%Y-%m-%d %H:%M"}</td>
			<td><a href="/admin/order/show.php?oid={$value['order_id']}" title="查看详细">查看详细</a> | <a href="/admin/order/index.php?action=delete&oid={$value['order_id']}" title="删除">删除</a></td>
		</tr>
		{/foreach}
	</table>
    <div class="pager">
	  	<div class="pager_list">{$order->pagecurrent}/{$order->pages}页 
	  		{section name=loop loop=$order->pages}
	  		{if $order->pagecurrent == $smarty.section.loop.index + 1}
	  			<strong>{$smarty.section.loop.index + 1}</strong> 
	  		{else}
		  		<a href="/admin/order/index.php?page={$smarty.section.loop.index + 1}">{$smarty.section.loop.index + 1}</a> 
		  	{/if}
		  	{/section}
	  	</div>
	</div>
</div>

{include file="{$ADMIN_TPL_PATH}common/header.tpl"}