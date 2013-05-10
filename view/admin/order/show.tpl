{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/order/">预约列表</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>预约详细内容</h2>
	</div>
</div> 	
<div class="basic_data">
	 <ul>
        <li><em>姓名：</em>{$order['order_name']}</li>
        <li><em>地址：</em>{$order['order_address']}</li>
        <li><em>电话：</em>{$order['order_phone']}</li>
        <li><em>email：</em>{$order['order_email']}</li>
        <li><em>方便联系时间：</em>{$order['order_touch_time']}</li>
        <li><em>装修类型：</em>
        	{if 0 == $order['order_type']}
				家居空间
			{else if 1 == $order['order_type']}
				办公空间
			{else if 2 == $order['order_type']}
				商业空间
			{/if}
        </li>
        <li><em>内容：</em>{$order['order_content']}</li>        
        <li><em>提交时间：</em>{$order['order_create_time']|date_format:"%Y-%m-%d %H:%M"}</li>
        
    </ul>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}