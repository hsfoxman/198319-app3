<?php 
require_once '../entry.php';
class Admin_Login_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->displayAdmin('login');
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post['user']) && !empty($_post['pwd']) 
			&& !empty($_post['inumber']) && true === $_post['inumber']) {
			$adminMod = new Admin_Verify_Mod();
			if (true === $adminMod->verifyUser($_post['user'], $_post['pwd'])) {
				$adminMod->setUserSession($_post['user']);
				location('/admin/');
			}
		} 
		$this->doGet();		
	}
	
	/**
	 * 过滤验证POST
	 */
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['userName'])) {
			$_post['user'] = $_POST['userName'];			
		}
		if (isset($_POST['pwd'])) {
			$_post['pwd'] = $_POST['pwd'];			
		}
		if (isset($_POST['inumber']) && isset($_SESSION['inumber']) && $_SESSION['inumber'] == $_POST['inumber']) {
			$_post['inumber'] = true;			
		}
		return $_post;
	}
	
	/**
	 * 过滤验证GET
	 */
	private function _filterGet() {
		$_get = array();
		return $_get;
	}
}
run('Admin_Login_Page');