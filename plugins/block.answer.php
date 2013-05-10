<?php
function smarty_block_answer($params, $content, $smarty, &$repeat, $template) { 
	if(empty($params['name'])) {
		$params['name'] = 'answer';
	}	
	$mod = new Answer_Mod();
	$param['now'] = empty($params['page']) ? 1 : $params['page'];
	$param['limit'] = empty($params['limit']) ? 20 : $params['limit'];
	$param['where'] = 'answer_type = 0';
	$answer = $mod->getListPage($param);	
	foreach ($answer->result as $key=>$value) {
		$param_answer['where'] = 'answer_type = 1 and answer_to_id = ' . $value['answer_id'];
		$answer_answer = $mod->getInfo(1, $param_answer);	
		$answer->result[$key]['answer'] = $answer_answer; 
	}
	//debug($answer);
	$smarty->assign($params['name'], $answer);
	if(!is_null($content)) print $content;
}