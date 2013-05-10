/**
 * 后台公共函数
 */

/**
 * 跳转url
 * 
 * @param url
 * @param target
 * 
 * @return void
 */
function chgUrl(url,target) {
	parent.mainFrame.location.replace(url);
}

/**
 * iFrame子页刷新
 * 
 * @return void
 */
function childReload() {
	window.location.reload();
}

/**
 * iFrame子页返回上一步
 * 
 * @return void
 */
function childBack() {
	window.history.go(-1);
}

/**
 * 退出
 * 
 * @return void
 */
function logout() {
	parent.location.href='/admin/logout.php';
}