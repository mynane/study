<?php
/**
 * 前台入口文件
 *
 * @package      	Loowei_xh
 * @author          Jaty
 * @copyright     	Copyright (c) 2013  (http://www.loowei.com)
 * @license         http://www.loowei.com/license.txt
 *
 */

if (!is_file('./install.lock')){
	header("location: ./Install/index.php");
	exit;
}
header('Content-type:text/html;charset=utf-8');
error_reporting(E_ERROR | E_WARNING | E_PARSE);
define('APP_NAME','Loowei');
define('APP_PATH','./Loowei/');
define('APP_DEBUG',false);
define('RUNTIME_PATH','./Cache/');
define('TMPL_PATH','./Tpl/');
define('DATA_PATH','./Cache/Data/');
require './Core/Core.php';