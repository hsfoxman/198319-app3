<?php 
/**
 * 文章管理-修改
 */
require_once '../../entry.php';
class Admin_News_Edit_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['sid'])) {
			$articleMod = new Article_Mod();
			$params['where'] = 'article_type = ' . $_get['sid'];
			$article = $articleMod->getInfo(1, $params);
			//编辑器
			$fck = new Fck_Editor_Core('content');
			$fck->Value = $article['article_content'];
			$this->assign('fck', $fck);
			$this->assign('article', $article);
			$this->displayAdmin('news/sp');
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
				location('', '修改成功', 2);
			}	
		}
		location('', '修改失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
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
		if (isset($_GET['sid'])) {
			$_get['sid'] = $_GET['sid'];
		}
		return $_get;
	}
}
run('Admin_News_Edit_Page');