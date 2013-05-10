<?php 
/**
 * 文章管理-修改
 */
require_once '../../entry.php';
class Admin_News_Edit_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['aid'])) {
			$articleMod = new Article_Mod();
			$article = $articleMod->getInfo($_get['aid']);
			$this->assign('article', $article);
			
			$categoryMod = new Category_Mod();
			$category = $categoryMod->getList();
			$this->assign('category', $category);
			
			$fck = new Fck_Editor_Core('content');
			$fck->Value = $article['article_content'];
			$fck->Height = 250;
			$this->assign('fck', $fck);
			
			$this->displayAdmin('news/edit');
		} else {
			location('/admin/news/');
		}
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {
			$_post['article_create_time'] = time();
			$arcitleMod = new Article_Mod();
			if ($arcitleMod->update($_post['params'], $_post['where'])) {
				location('/admin/news', '修改成功', 2);
			}	
		}
		location('/admin/news', '修改失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['params']['article_title'] = $_POST['title'];
		}
		if (isset($_POST['cid'])) {
			$_post['params']['article_category_id'] = $_POST['cid'];
		}
		if (isset($_POST['content'])) {
			$_post['params']['article_content'] = $_POST['content'];
		}
		if (isset($_POST['aid'])) {
			$_post['where'] = ' article_id = ' . $_POST['aid'];
		}
		return $_post;
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['aid'])) {
			$_get['aid'] = $_GET['aid'];
		}
		return $_get;
	}
}
run('Admin_News_Edit_Page');