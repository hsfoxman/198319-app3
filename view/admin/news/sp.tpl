{* 静态页面管理 *}
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		{if 1 == $article['article_type']}
			<li class="selected"><span>修改《企业概况》</span></a></li>
		{else}
			<li><a href="/admin/news/sp.php?sid=1">修改《企业概况》</a></li>
		{/if}
		{if 2 == $article['article_type']}
			<li class="selected"><span>修改《企业荣耀》</span></a></li>
		{else}
			 <li><a href="/admin/news/sp.php?sid=2">修改《企业荣耀》</a></li>
		{/if}
		{if 3 == $article['article_type']}
			<li class="selected"><span>修改《联系我们》</span></a></li>
		{else}
			<li><a href="/admin/news/sp.php?sid=3">修改《联系我们》</a></li>
		{/if}
		{if 4 == $article['article_type']}
			<li class="selected"><span>修改《服务承诺》</span></a></li>
		{else}
			<li><a href="/admin/news/sp.php?sid=4">修改《服务承诺》</a></li>
		{/if}
		{if 5 == $article['article_type']}
			<li class="selected"><span>修改《服务流程》</span></a></li>
		{else}
			<li><a href="/admin/news/sp.php?sid=5">修改《服务流程》</a></li>
		{/if}
		            
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>编辑《{$article['article_title']}》</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li><em>内容：</em>
        {$fck->Create()}
        </li>
        <li class=" mt20">
        	<input type="hidden" value="{$article['article_id']}" name="aid" id="aid" />   
	        <input type="submit" value="确定" class="btn btn_orange" />
	    </li>
    </ul>
    </form>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}