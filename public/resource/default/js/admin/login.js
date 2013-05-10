function registerEvent() {
	$('#loginForm').submit( function () {
		/**
		 * 帐号格式检查
		 */
		if(verifyUser() == false) {
			return false;
		}		
		/**
		 * 密码格式检查
		 */
		if(verifyPwd() == false) {
			return false;
		}
	});	
}

/**
 * 验证用户名
 */
function verifyUser() {
	/**
	 * 用户名仅包含字母，并且在3-20个字符之间
	 */
	var re = /^[\w]{4,20}$/;
	var usr = $('#userName',$('#loginForm')).val();
	if(true !== re.test(usr)) {
		alert('用户名错误');
		return false;
	}
}
	
/**
 * 密码格式检查
 */
function verifyPwd() {
	/**
	 * 密码最少6位
	 */
	var pwd = $('#pwd',$('#loginForm')).val();
	if(pwd.length < 6) {
		alert('密码错误');
		return false;
	}
	return true;
}

//------------------ 初始环境 ------------------

// 文档加载完后自动触发	
function regDoneLoad() {
	registerEvent();
	$('#userName',$('#loginForm')).focus();
}
$(document).ready(function(){
	regDoneLoad();
});