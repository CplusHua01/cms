<?php
/**
 * index.php 首页
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied');
if($user->userId<=0) $user->ToLogin();
$smarty=InitSmarty();
$smarty->assign('do',$do);
$smarty->display('admin/main.html');
?>