<?php 
/**
 * 案例管理
 */
require_once '../../entry.php';
class Admin_Case_Content_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);	
		
		if (isset($_get['cid'])) {
			$caseMod = new Case_Mod();
			$case = $caseMod->getInfo($_get['cid']);
			$this->assign('case', $case);
			
			
			$casecontentMod = new Casecontent_Mod();
			$param['where'] = 'case_content_case_id = ' . $_get['cid'];
			$param['now'] = $_get['page'];
			$casecontent = $casecontentMod->getListPage($param);
			$this->assign('casecontent', $casecontent);
			
			$this->displayAdmin('case/content');
		} else {
			location('/admin/case/');
		}	
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['pid'])) {
			$casecontentMod = new Casecontent_Mod();
			if ($casecontentMod->delete($_get['pid'])) {
				location('/admin/case/content.php?cid=' . $_get['cid'], '删除成功', 2);
			}		
		}
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['action'])) {
			$_get['action'] = $_GET['action'];
		}
		if (isset($_GET['cid'])) {
			$_get['cid'] = $_GET['cid'];
		}
		if (isset($_GET['pid'])) {
			$_get['pid'] = $_GET['pid'];
		}
		if (isset($_GET['page'])) {
			$_get['page'] = $_GET['page'];
		} else {
			$_get['page'] = 1;
		}
		return $_get;
	}
}
run('Admin_Case_Content_Page');