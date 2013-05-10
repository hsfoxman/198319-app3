<?php 
require_once 'site_entry.php';
class Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('index');	
	}
	
	public function doPost() {
		$this->doGet();
	}
}
run('Index_Page');

