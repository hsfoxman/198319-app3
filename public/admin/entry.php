<?php
//require_once 'D:/Project/f-frameworks/p-one/config/path.cfg.php';
require_once 'D:\\Project\\f-project\\p-three\\config\\path.cfg.php';
session_start(); 
$adminMod = new Admin_Verify_Mod();
$adminMod->verifyUserSession();