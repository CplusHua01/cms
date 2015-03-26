<?php
/**
 * index.php 首页
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied');

$act=Val('act','GET');

switch($act){
	default:
		$smarty=InitSmarty();
		$smarty->display('index.html');
		break;
}
?>