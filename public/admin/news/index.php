<?php 
/**
 * 文章管理
 */
require_once '../../entry.php';
class Admin_News_Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);	
			
		$articleMod = new Article_Mod();
		$param['where'] = ' article_type = 0 ';
		$param['now'] = $_get['page'];
		$articles = $articleMod->getListPage($param);
		$this->assign('articles', $articles);

		$categoryMod = new Category_Mod();
		$category = $categoryMod->getList();
		foreach ($category as $value) {
			$category['second'][$value['category_id']] = $value['category_title'];
		}
		$this->assign('category', $category['second']);
		
		$this->displayAdmin('news/index');
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['aid'])) {
			$articleMod = new Article_Mod();
			if ($articleMod->delete($_get['aid'])) {
				location('/admin/news', '删除成功', 2);
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
run('Admin_News_Index_Page');