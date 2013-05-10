<?php 
require_once '../entry.php';
class Admin_Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		
		$this->displayAdmin('quick');
	}
	
	public function doPost() {
		
	}
}
run('Admin_Index_Page');