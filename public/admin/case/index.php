<?php 
/**
 * 案例管理
 */
require_once '../../entry.php';
class Admin_Case_Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);	
			
		$caseMod = new Case_Mod();
		$param['now'] = $_get['page'];
		$case = $caseMod->getListPage($param);
		$this->assign('case', $case);
		
		$this->displayAdmin('case/index');
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['cid'])) {
			$caseMod = new Case_Mod();
			if ($caseMod->delete($_get['cid'])) {
				location('/admin/case', '删除成功', 2);
			}		
		}
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['action'])) {
			$_get['action'] = $_GET['action'];
		}
		if (isset($_GET['cid'])) {
			$_get['aid'] = $_GET['cid'];
		}
		if (isset($_GET['page'])) {
			$_get['page'] = $_GET['page'];
		} else {
			$_get['page'] = 1;
		}
		return $_get;
	}
}
run('Admin_Case_Index_Page');