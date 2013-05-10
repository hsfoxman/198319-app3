<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class About_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('about');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('About_Page');