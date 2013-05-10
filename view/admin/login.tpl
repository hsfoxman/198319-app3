<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta content="IE=EmulateIE7" http-equiv="X-UA-Compatible" />
<title>{$SITE_TITLE} - 后台系统 - 管理员登陆</title>
<link href="{$ADMIN_CSS_PATH}login.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="{$ADMIN_JS_PATH}jquery.js"></script>
</head>
<body>
<form id="loginForm" method="post" action="/admin/login.php" autocomplete="off" target="_top"  />
<div id="main">
	<div id="title">{$SITE_TITLE}后台系统</div>
	<div id="login">
		<div class="lft">帐&nbsp;&nbsp;号：</div>
		<div class="rgt"><input type="text" name="userName" id="userName" value="" style="width:160px;" tabindex="1" /></div>
		<div class="lft">密&nbsp;&nbsp;码：</div>
		<div class="rgt"><input type="password" name="pwd" id="pwd" value="" style="width:160px;" tabindex="2" /></div>
		<div class="lft">验证码:</div>
		<div class="rgt"><input name="inumber" type="text" size="10" /> <img src="/admin/inumber.php" border="0" align="absmiddle" class="border" /></div>
	</div>
</div>
<div id="sub"><input type="image" src="/resource/admin/img/sub.jpg" name="submit" value="登录系统" tabindex="4" /></div>
</form>
<script type="text/javascript" src="{$ADMIN_JS_PATH}login.js"></script>
</body>
</html>