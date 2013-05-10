<?php 
/**
 * 文章管理-添加类别
 */
require_once '../../entry.php';
class Admin_News_Category_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->displayAdmin('news/category_add');
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$categoryMod = new Category_Mod();
			if ($categoryMod->insert($_post)) {
				location('/admin/news/category.php', '添加成功', 2);
			}	
		}
		location('/admin/news/category_add.php', '添加失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['category_title'] = $_POST['title'];
		}
		return $_post;
	}
}
run('Admin_News_Category_Add_Page');