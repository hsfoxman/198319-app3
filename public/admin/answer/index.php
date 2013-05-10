<?php 
/**
 * 留言管理
 */
require_once '../../entry.php';
class Admin_Answer_Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);	
			
		$answerMod = new Answer_Mod();
		$param['where'] = 'answer_type = 0';
		$param['now'] = $_get['page'];
		$answer = $answerMod->getListPage($param);
		$this->assign('answer', $answer);
		
		$this->displayAdmin('answer/index');
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['aid'])) {
			$answerMod = new Answer_Mod();
			if ($answerMod->delete($_get['aid'])) {
				location('/admin/answer', '删除成功', 2);
			}		
		}
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['action'])) {
			$_get['action'] = $_GET['action'];
		}
		if (isset($_GET['aid'])) {
			$_get['aid'] = $_GET['aid'];
		}
		if (isset($_GET['page'])) {
			$_get['page'] = $_GET['page'];
		} else {
			$_get['page'] = 1;
		}
		return $_get;
	}
}
run('Admin_Answer_Index_Page');