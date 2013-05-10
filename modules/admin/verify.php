<?php
/**
 * 后台验证模块
 */

class Admin_Verify_Mod {
	
	public function __construct() {}
	
	/**
	 * 验证管理员账号
	 * 
	 * @param string $verify 用户名
	 * @param string $pwd 密码
	 * 
	 * @return boolen;
	 */
	public function verifyUser($user, $pwd) {
		if (empty($user) || empty($pwd)) {
			return false;
		}
		$site = require APP_CFG_PATH . 'site.cfg.php';
		if ($site['admin_user'] == $user && $site['admin_pwd'] == $pwd) {
			return true;
		} 
		return false;
	}
	
	/**
	 * 设置后台管理员SESSION
	 * 
	 * @param string $user
	 * 
	 * @return void
	 */
	public function setUserSession($user) {
		if (empty($user)) {
			return false;
		}
		$_SESSION['admin_user'] = $user;
		$_SESSION['admin_name'] = '系统管理员';
	}
	
	
	public function verifyUserSession() {
		$site = require APP_CFG_PATH . 'site.cfg.php';
		if (!empty($_SESSION['admin_user']) && $site['admin_user'] == $_SESSION['admin_user']) {
			if (!empty($_SERVER['REQUEST_URI']) && '/admin/login.php' == $_SERVER['REQUEST_URI']) {
				location('/admin/');
			}
		} else if ('/admin/inumber.php' == $_SERVER['REQUEST_URI']) {
			//empty
		} else {
			if (!empty($_SERVER['REQUEST_URI']) && '/admin/login.php' != $_SERVER['REQUEST_URI']) {
				location('/admin/login.php');
			}
		}
	}
}