{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/news/">文章列表</a></li>
        <li><a href="/admin/news/add.php">添加文章</a></li>
        <li><a href="/admin/news/category.php">文章类别</a></li>
        <li class="selected"><span>添加文章类别</span></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>新增文章类别</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li class=" mt20">
            <input type="submit" value="确定" class="btn btn_orange" />
            <input type="reset" value="重置" class="btn btn_blue ml10" />
        </li>
    </ul>
    </form>
</div>

{include file="{$ADMIN_TPL_PATH}common/header.tpl"}