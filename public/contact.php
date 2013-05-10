<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class Contact_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('contact');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('Contact_Page');