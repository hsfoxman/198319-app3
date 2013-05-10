<?php 
/**
 * 留言管理-回复留言
 */
require_once '../../entry.php';
class Admin_Answer_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['aid'])) {
			$answerMod = new Answer_Mod();
			$answer = $answerMod->getInfo($_get['aid']);
			$this->assign('answerTo', $answer);	
			$answer = array();
			$params['where'] = ' answer_to_id = ' . $_get['aid'];
			$answer = $answerMod->getInfo(1, $params);
			$this->assign('answer', $answer);
					
			$this->displayAdmin('answer/answer');
		} else {
			location('/admin/answer/');
		}
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {				
			$_post['answer_create_time'] = time();
			$_post['answer_type'] = 1;
			$_post['answer_user_name']  = '网站管理员';
			$answerMod = new Answer_Mod();
			//修改
			if (isset($_post['answer_id'])) {
				$where = 'answer_id = ' . $_post['answer_id'];
				$params['answer_content'] = $_post['answer_content'];
				$answerMod->update($params, $where);
			} else {
			//新答复
				$from_id = $answerMod->insert($_post);	
				$where = 'answer_id = ' . $_post['answer_to_id'];
				$params['answer_from_id'] = $from_id;			
				$answerMod->update($params, $where);							
			}
			location('/admin/answer', '答复成功', 2);
		}
		location('/admin/answer', '答复失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['content'])) {
			$_post['answer_content'] = $_POST['content'];
		}
		if (isset($_POST['toid'])) {
			$_post['answer_to_id'] = $_POST['toid'];
		}
		if (isset($_POST['aid']) && !empty($_POST['aid'])) {
			$_post['answer_id'] = $_POST['aid'];
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
run('Admin_answer_Add_Page');