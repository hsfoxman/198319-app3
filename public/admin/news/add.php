<?php 
/**
 * 文章管理-添加
 */
require_once '../../entry.php';
class Admin_News_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$fck = new Fck_Editor_Core('content');
		$fck->Height = 250;
		$this->assign('fck', $fck);
		
		$categoryMod = new Category_Mod();
		$category = $categoryMod->getList();
		$this->assign('category', $category);
		
		$this->displayAdmin('news/add');
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$_post['article_create_time'] = time();
			$arcitleMod = new Article_Mod();
			if ($arcitleMod->insert($_post)) {
				location('/admin/news', '添加成功', 2);
			}	
		}
		location('/admin/news/add.php', '添加失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['article_title'] = $_POST['title'];
		}
		if (isset($_POST['cid'])) {
			$_post['article_category_id'] = $_POST['cid'];
		}
		if (isset($_POST['content'])) {
			$_post['article_content'] = $_POST['content'];
		}
		return $_post;
	}
}
run('Admin_News_Add_Page');