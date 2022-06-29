<?php

 defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
 defined('SITE_ROOT') ? null : define('SITE_ROOT', 'localhost'.DS.'BLOGPHPAPI'); 
 defined('MOD_PATH') ? null : define('MOD_PATH', SITE_ROOT.DS.'models'); 
 defined('CONT_PATH') ? null : define('CONT_PATH', SITE_ROOT.DS.'controller'); 
 defined('VIEW_PATH') ? null : define('VIEW_PATH', SITE_ROOT.DS.'views'); 
 defined('CORE_PATH') ? null : define('CORE_PATH', SITE_ROOT.DS.'core'); 



require(MOD_PATH.DS.'Dbh.models.php');
require(CONT_PATH.DS.'Get.controller.php');
require(VIEW_PATH.DS.'getapi.views.php');
