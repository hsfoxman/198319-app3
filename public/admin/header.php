<?php 
require_once '../entry.php';
class Admin_Header_Page extends Controller_Page_Core {
	
	public function doGet() {
		
		$this->displayAdmin('header');
	}
	
	public function doPost() {
		
	}
}
run('Admin_Header_Page');