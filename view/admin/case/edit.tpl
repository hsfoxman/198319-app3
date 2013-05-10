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
        <h2>修改产品</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
    <ul>
        <li>
        	<em>名称：</em>
        	<input type="text" name="title" value="{$case['case_title']}" id="title" class="ipt_wm ipt_tc" />
        </li>
        <li><em>类别：</em>
        	<select name="type" id="type">
        		<option value="1" {if 1 == $case['case_type']}selected="selected"{/if}>镀锌钢管</option>
        		<option value="2" {if 2 == $case['case_type']}selected="selected"{/if}>PVC和PP-R管</option>
        		<option value="3" {if 3 == $case['case_type']}selected="selected"{/if}>铝塑复合管</option>
        		</select>
        </li>
        <li class=" mt20">
            <input type="hidden" value="{$case['case_id']}" name="cid" id="cid" />   
	        <input type="submit" value="确定" class="btn btn_orange" />
        </li>
    </ul>
    </form>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}