<?php 
require_once '../entry.php';
class Admin_Fbtn_Page extends Controller_Page_Core {
	
	public function doGet() {
		
		$this->displayAdmin('fbtn');
	}
	
	public function doPost() {
		
	}
}
run('Admin_Fbtn_Page');