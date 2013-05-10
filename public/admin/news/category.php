<?php 
/**
 * 文章管理-类别
 */
require_once '../../entry.php';
class Admin_News_Category_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);		
		$categoryMod = new Category_Mod();
		$category = $categoryMod->getList();
		$this->assign('category', $category);
		$this->displayAdmin('news/category');
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['cid'])) {
			$categoryMod = new Category_Mod();
			$category = $categoryMod->delete($_get['cid']);
			location('/admin/news/category.php', '删除成功', 2);
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
		return $_get;
	}

}
run('Admin_News_Category_Page');