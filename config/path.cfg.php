<?php
/**
 * վ站点配置
 */
defined('SITE_PATH')
    || define('SITE_PATH', realpath(dirname(__FILE__) . '/../public'));
    
defined('UPLOAD_PATH')
    || define('UPLOAD_PATH', SITE_PATH . '/upload/');
    
defined('APP_PATH')
    || define('APP_PATH', SITE_PATH . '/../');
   
defined('LIBRARY_PATH')
    || define('LIBRARY_PATH', SITE_PATH . '/../../library');
    
defined('SITE_TPL_PATH')
    || define('SITE_TPL_PATH', APP_PATH . 'view/default/');	

defined('ADMIN_TPL_PATH')
    || define('ADMIN_TPL_PATH', APP_PATH . 'view/admin/');	
    
defined('APP_CFG_PATH')
    || define('APP_CFG_PATH', APP_PATH . 'config/');
    
set_include_path(implode(PATH_SEPARATOR, array(
    realpath(LIBRARY_PATH),
    get_include_path(),
)));
require_once LIBRARY_PATH . '/core/config/path.cfg.php';
require_once CORE_PATH . 'func.php';

//站点名称
defined('SITE_TITLE')
	|| define('SITE_TITLE', '律师事务所');	
