<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class News_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('news');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('News_Page');