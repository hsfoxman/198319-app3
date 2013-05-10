<?php
function smarty_block_category($params, $content, $smarty, &$repeat, $template) { 
	if(empty($params['name'])) {
		$params['name'] = 'category';
	}
	$mod = new Category_Mod();
	if (!empty($params['cid'])) {
		$category = $mod->getInfo($params['cid']);	
	} else {
		$category = $mod->getList($param);	
	}

	$smarty->assign($params['name'], $category);
	if(!is_null($content)) print $content;
}