<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class Join_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('join');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('Join_Page');