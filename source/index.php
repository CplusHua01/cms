<?php
/**
 * index.php 首页
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied');
if($user->userId<=0) $user->ToLogin();
$userName=$user->userName;
$smarty=InitSmarty();
$smarty->assign('do',$do);
$smarty->assign('user',$userName);
if($user->adminLevel == 1){
    $smarty->display('admin/main.tpl');
}else{
    $smarty->display('user/main.tpl');
}
?>