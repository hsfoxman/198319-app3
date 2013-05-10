<?php 
/**
 * 文章管理-修改类别
 */
require_once '../../entry.php';
class Admin_News_Category_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['cid'])) {
			$categoryMod = new Category_Mod();
			$category = $categoryMod->getInfo($_get['cid']);
			$this->assign('category', $category);
			$this->displayAdmin('news/category_edit');
		} else {
			location('/admin/news/category.php');
		}
		
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$categoryMod = new Category_Mod();
			if ($categoryMod->update($_post['params'], $_post['where'])) {
				location('/admin/news/category.php', '修改成功', 2);
			}	
		}
		location('/admin/news/category.php', '修改失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['params']['category_title'] = $_POST['title'];
		}
		if (isset($_POST['cid'])) {
			$_post['where'] = ' category_id = ' . $_POST['cid'];
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
run('Admin_News_Category_Add_Page');