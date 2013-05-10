<?php 
/**
 * 案例管理-添加
 */
require_once '../../entry.php';
class Admin_Case_Content_Add_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['cid'])) {
			$caseMod = new Case_Mod();
			$case = $caseMod->getInfo($_get['cid']);
			$this->assign('case', $case);
					
			$this->displayAdmin('case/content_add');
		} else {
			location('/admin/case/');
		}
	}
	
	public function doPost() {
		$_post = $this->_filterPost();
		if (!empty($_post)) {				
			//上传
			$upload = new File_File_Core($_FILES['image']);   # 创建对象
			if ($upload->save()) {
				//$_post['case_content_image'] = '/upload/case/' . $upload->date . '/' . $upload->datetime . '.' . $upload->extention;
				$_post['case_content_image'] = $upload->getFilePath();
				$casecontentMod = new Casecontent_Mod();
				if ($casecontentMod->insert($_post)) {
					location('/admin/case/content.php?cid=' . $_post['case_content_case_id'], '添加成功', 2);
				}
			}	
		}
		location('/admin/case/content.php?cid=' . $_post['case_content_case_id'], '添加失败', 2);
	}
	
	private function _filterPost() {
		$_post = array();
		if (isset($_POST['title'])) {
			$_post['case_content_title'] = $_POST['title'];
		}
		if (isset($_POST['intro'])) {
			$_post['case_content_intro'] = $_POST['intro'];
		}
		if (isset($_POST['image'])) {
			$_post['case_content_image'] = $_POST['image'];
		}
		if (isset($_POST['cid'])) {
			$_post['case_content_case_id'] = $_POST['cid'];
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
run('Admin_Case_Content_Add_Page');