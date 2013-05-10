<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class Enterprise_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('enterprise');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('Enterprise_Page');