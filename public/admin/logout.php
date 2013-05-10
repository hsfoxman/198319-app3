<?php 
/**
 * 退出登陆
 */
require_once '../entry.php';
class Admin_Logout_Page extends Controller_Page_Core {
	
	public function doGet() {
		unset($_SESSION['admin_user']);
		unset($_SESSION['admin_name']);
		location('/admin/login.php');
	}
	
	public function doPost() {
		$this->doGet();
	}

}
run('Admin_Logout_Page');