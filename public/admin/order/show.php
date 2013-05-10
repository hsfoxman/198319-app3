<?php 
/**
 * 预约管理-查看
 */
require_once '../../entry.php';
class Admin_Order_Show_Page extends Controller_Page_Core {
	
	public function doGet() {
		$_get = $this->_filterGet();
		if (isset($_get['oid'])) {
			$orderMod = new Order_Mod();
			$order = $orderMod->getInfo($_get['oid']);
			$this->assign('order', $order);
			
			$this->displayAdmin('order/show');
		} else {
			location('/admin/order/');
		}
	}
	
	public function doPost() {
		$this->doGet();
	}
	
	private function _filterGet() {
		$_get = array();
		if (isset($_GET['oid'])) {
			$_get['oid'] = $_GET['oid'];
		}
		return $_get;
	}
}
run('Admin_Order_Show_Page');