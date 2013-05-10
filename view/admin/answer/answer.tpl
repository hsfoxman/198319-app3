{include file="{$ADMIN_TPL_PATH}common/header.tpl"}
<div class="box_chart">
	<div class="tab">
	<ul>
		<li><a href="/admin/answer/">留言列表</a></li>
	</ul>
	</div>
</div>
<div class="box_bar">
	<div class="form_simple">
        <h2>答复留言</h2>
	</div>
</div>
<div class="basic_data">
	<form method="post">
	<ul>
        <li><em>姓名：</em>{$answerTo['answer_user_name']}</li>
        <li><em>内容：</em>{$answerTo['answer_content']}</li>        
        <li><em>提交时间：</em>{$answerTo['answer_create_time']|date_format:"%Y-%m-%d %H:%M"}</li>       
  		<input type="hidden" value="{$answerTo['answer_id']}" name="toid" id="toid" />           
    </ul>
    <ul>
        <li><em>答复内容：</em><textarea id="content" name="content" cols="" rows="" class="ipt_wl">{$answer['answer_content']}</textarea></li>
        <li class=" mt20">
        	<input type="hidden" value="{$answer['answer_id']}" name="aid" id="aid" />   
            <input type="submit" value="确定" class="btn btn_orange" />
            <input type="reset" value="重置" class="btn btn_blue ml10" />
        </li>
    </ul>
    </form>
</div>
{include file="{$ADMIN_TPL_PATH}common/header.tpl"}