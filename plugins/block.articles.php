<?php
function smarty_block_articles($params, $content, $smarty, &$repeat, $template) { 
	if(empty($params['name'])) {
		$params['name'] = 'articles';
	}	
	$mod = new Article_Mod();
	$param['now'] = empty($params['page']) ? 1 : $params['page'];
	$param['where'] = ' article_type = 0 ';
	if (!empty($params['cid'])) {
		$param['where'] .= ' and article_category_id = ' . $params['cid'];	
	}
	$param['limit'] = empty($params['limit']) ? 20 : $params['limit'];
	$articles = $mod->getListPage($param);	
	$smarty->assign($params['name'], $articles);
	if(!is_null($content)) print $content;
}