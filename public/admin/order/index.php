<?php 
/**
 * 预约管理
 */
require_once '../../entry.php';
class Admin_Order_Index_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		$this->_doDelete($_get);	
			
		$orderMod = new Order_Mod();
		$param['now'] = $_get['page'];
		$order = $orderMod->getListPage($param);
		$this->assign('order', $order);
		
		$this->displayAdmin('order/index');
	}
	
	public function doPost() {
		$this->doGet();	
	}
	
	private function _doDelete($_get = array()) {
		if (isset($_get['action']) && 'delete' == $_get['action'] && isset($_get['oid'])) {
			$orderMod = new Order_Mod();
			if ($orderMod->delete($_get['oid'])) {
				location('/admin/order', '删除成功', 2);
			}		
		}
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['action'])) {
			$_get['action'] = $_GET['action'];
		}
		if (isset($_GET['oid'])) {
			$_get['oid'] = $_GET['oid'];
		}
		if (isset($_GET['page'])) {
			$_get['page'] = $_GET['page'];
		} else {
			$_get['page'] = 1;
		}
		return $_get;
	}
}
run('Admin_Order_Index_Page');