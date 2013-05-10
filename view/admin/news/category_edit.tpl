{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/news/">文章列表</a></li>
        <li><a href="/admin/news/add.php">添加文章</a></li>
        <li><a href="/admin/news/category.php">文章类别</a></li>
        <li><a href="/admin/news/category_add.php">添加文章类别</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>修改文章类别</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" value="{$category['category_title']}" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li class=" mt20">
        	<input type="hidden" value="{$category['category_id']}" name="cid" id="cid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
        </li>
    </ul>
    </form>
</div>

{include file="{$ADMIN_TPL_PATH}common/header.tpl"}