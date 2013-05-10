<?php 
require_once 'site_entry.php';
class Introduction_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('introduction');	
	}
	
	public function doPost() {
		$this->doGet();
	}
}
run('Introduction_Page');

