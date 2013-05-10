{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/case/">产品列表</a></li>
        <li class="selected"><span>添加产品</span></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>产品《{$case['case_title']}》- 新增图片</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post" enctype="multipart/form-data">
    <ul>
        <li>
        	<em>标题：</em>
        	<input type="text" name="title" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li><em>图片说明：</em>
        	<textarea cols="" name="intro" id="intro" rows="" class="ipt_wl"></textarea>
        </li>
        <li><em>图片：</em><input type="file" size="40" id="image" class="input_pic" name="image"></li>
            
        <li class="mt20">
        	<input type="hidden" value="{$case['case_id']}" name="cid" id="cid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
            <input type="reset" value="重置" class="btn btn_blue ml10" />
        </li>
    </ul>
    </form>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}