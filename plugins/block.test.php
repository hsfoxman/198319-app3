<?php
function smarty_block_test($params, $content, $smarty, &$repeat, $template) {
	if(empty($params['name'])) {
		$params['name'] = 'test';
	}
	$test = array('id' => 3, 'title' => 'helo');
	$smarty->assign($params['name'], $test);
	if(!is_null($content)) print $content;
}