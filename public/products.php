<?php 
/**
 * 文章列表
 */
require_once 'site_entry.php';
class Products_Page extends Controller_Page_Core {
	
	public function doGet() {
		$this->display('products');
	}
	
	public function doPost() {
		$this->doGet();	
	}
}
run('Products_Page');