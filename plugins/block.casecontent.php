<?php
function smarty_block_casecontent($params, $content, $smarty, &$repeat, $template) { 
	if(empty($params['name'])) {
		$params['name'] = 'casecontent';
	}	
	$mod = new Casecontent_Mod();
	$param['now'] = empty($params['page']) ? 1 : $params['page'];
	if (!empty($params['type'])) {
		$param['where'] .= ' case_content_case_id = ' . $params['type'];	
	}
	$param['limit'] = empty($params['limit']) ? 20 : $params['limit'];
	$casecontent = $mod->getListPage($param);
	$smarty->assign($params['name'], $casecontent);
	if(!is_null($content)) print $content;
}