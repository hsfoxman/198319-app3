<?php 
/**
 * 案例管理-添加
 */
require_once '../../entry.php';
class Admin_Case_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->displayAdmin('case/add');
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$_post['case_create_time'] = time();
			$caseMod = new Case_Mod();
			if ($caseMod->insert($_post)) {
				location('/admin/case', '添加成功', 2);
			}	
		}
		location('/admin/case/add.php', '添加失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['case_title'] = $_POST['title'];
		}
		if (isset($_POST['type'])) {
			$_post['case_type'] = $_POST['type'];
		}
		return $_post;
	}
}
run('Admin_Case_Add_Page');