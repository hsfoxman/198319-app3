<?php 
require_once 'site_entry.php';
class Article_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['aid']) && isset($_get['cid'])) {
			$articleMod = new Article_Mod();
			$article = $articleMod->getInfo($_get['aid']);
			$this->assign('article', $article);
			
			$categoryMod = new Category_Mod();
			$category = $categoryMod->getInfo($_get['cid']);
			$this->assign('cate', $category);
			$this->display('article');
		} else {
			location('/');
		}
	}
	
	public function doPost() {
		$this->doGet();
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['cid'])) {
			$_get['cid'] = $_GET['cid'];
		}
		if (isset($_GET['aid'])) {
			$_get['aid'] = $_GET['aid'];
		}
		return $_get;
	}
}
run('Article_Page');

