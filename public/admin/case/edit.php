<?php 
/**
 * 案例管理 - 修改
 */
require_once '../../entry.php';
class Admin_Case_Edit_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['cid'])) {
			$caseMod = new Case_Mod();
			$case = $caseMod->getInfo($_get['cid']);
			$this->assign('case', $case);
			
			$this->displayAdmin('case/edit');
		} else {
			location('/admin/case/');
		}
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$_post['case_create_time'] = time();
			$caseMod = new Case_Mod();
			if ($caseMod->update($_post['params'], $_post['where'])) {
				location('/admin/case', '修改成功', 2);
			}	
		}
		location('/admin/case', '修改失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['params']['case_title'] = $_POST['title'];
		}
		if (isset($_POST['type'])) {
			$_post['params']['case_type'] = $_POST['type'];
		}
		if (isset($_POST['cid'])) {
			$_post['where'] = ' case_id = ' . $_POST['cid'];
		}
		return $_post;
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['cid'])) {
			$_get['cid'] = $_GET['cid'];
		}
		return $_get;
	}
}
run('Admin_Case_Edit_Page');