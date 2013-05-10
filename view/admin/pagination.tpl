{if ($page['pager']['pageLastNum'] > 1)}

<div class="pageBar">
	{if ($page['pager']['pageNow'] != 1)}
		<a href="#" onclick="{$page['pager']['callJs']}(1);return false;" class="pre">第一页</a>&nbsp;
		<a href="#" onclick="{$page['pager']['callJs']}({$page['pager']['pagePrevNum']});return false;" class="pre">上一页</a>
	{/if}

	{section name=a loop=($page['pager']['pageAe'] - $page['pager']['pageAb'] + 1)}
		{if ($page['pager']['pageNow'] == ($smarty.section.a.index + $page['pager']['pageAb']))}
			<strong>{$smarty.section.a.index + $page['pager']['pageAb']}</strong>
		{else}
			<a href="#" onclick="{$page['pager']['callJs']}({{$smarty.section.a.index + $page['pager']['pageAb']}});return false;">{{$smarty.section.a.index + $page['pager']['pageAb']}}</a>
		{/if}
	{/section}

	{if ($page['pager']['pageNow'] != $page['pager']['pageLastNum'])}
		<a href="#" onclick="{$page['pager']['callJs']}({$page['pager']['pageNextNum']});return false;" class="next">下一页</a>
		<a href="#" onclick="{$page['pager']['callJs']}({$page['pager']['pageLastNum']});return false;" class="next">最后页</a>
	{/if}


	<select onchange="{$page['pager']['callJs']}(this.value);">
	{section name=a loop=$page['pager']['pageLastNum']}
		<option value="{{$smarty.section.a.index + 1}}"{if ($page['pager']['pageNow'] == ($smarty.section.a.index + 1))} selected{/if}>{{$smarty.section.a.index + 1}}</option>
	{/section}
	</select>
	共{$page['pager']['pageSum']}{$page['pager']['pageUnit']}{$page['pager']['pageTit']}（{$page['pager']['pageBeginNum']}-{$page['pager']['pageEndNum']}）

</div>
{/if}

