<?php
function smarty_block_article($params, $content, $smarty, &$repeat, $template) { 
	if(empty($params['name'])) {
		$params['name'] = 'article';
	}
	$test = array('id' => 3, 'title' => 'helo');
	$smarty->assign($params['name'], $test);
	if(!is_null($content)) print $content;
}