<?php 
require_once '../entry.php';
class Admin_Side_Page extends Controller_Page_Core {
	
	public function doGet() {
		
		$this->displayAdmin('side');
	}
	
	public function doPost() {
		
	}
}
run('Admin_Side_Page');