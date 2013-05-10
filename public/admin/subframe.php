<?php 
require_once '../entry.php';
class Admin_Subframe_Page extends Controller_Page_Core {
	
	public function doGet() {
		
		$this->displayAdmin('subframe');
	}
	
	public function doPost() {
		
	}
}
run('Admin_Subframe_Page');