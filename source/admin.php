<?php
/**
 * Created by www.03sec.com.
 * User: sky
 * Date: 15/3/31
 * Time: 09:27
 */
header("Content-Type: text/html; charset=utf-8");
/**
 *　　　　　　　　┏┓　┏┓+ +
 *　　　　　　　┏┛┻━━━┛┻┓ + +
 *　　　　　　　┃　　　　　　　┃
 *　　　　　　　┃　　　━　　　┃ ++ + + +
 *　　　　　　 ████━████ ┃+
 *　　　　　　　┃　　　　　　　┃ +
 *　　　　　　　┃　　　┻　　　┃
 *　　　　　　　┃　　　　　　　┃ + +
 *　　　　　　　┗━┓　　　┏━┛
 *　　　　　　　　　┃　　　┃
 *　　　　　　　　　┃　　　┃ + + + +
 *　　　　　　　　　┃　　　┃　　　　Code is far away from bug with the animal protecting
 *　　　　　　　　　┃　　　┃ + 　　　　神兽保佑,代码无bug
 *　　　　　　　　　┃　　　┃
 *　　　　　　　　　┃　　　┃　　+
 *　　　　　　　　　┃　 　　┗━━━┓ + +
 *　　　　　　　　　┃ 　　　　　　　┣┓
 *　　　　　　　　　┃ 　　　　　　　┏┛
 *　　　　　　　　　┗┓┓┏━┳┓┏┛ + + + +
 *　　　　　　　　　　┃┫┫　┃┫┫
 *　　　　　　　　　　┗┻┛　┗┻┛+ + + +
 */
if(!defined('IN_OLDCMS')) die('Access Denied');
if($user->userId<=0 ) ShowError('未登录或已超时',$url['login'],'重新登录');
if($user->adminLevel != 1) ShowError('你没有访问后台的权限',$url['login'],'返回');

//本站创建时间
$sitestart=strtotime("2015-3-31");
$siterow = time();
$sitetime=$siterow - $sitestart;
$sitedays = (int)($sitetime/86400);

$act=Val('act','GET');
switch($act){
    default:
        $userName=$user->userName;
        $UNUM=$user->getUserNum();
        $smarty=InitSmarty();
        $smarty->assign('do',$do);
        $smarty->assign('show',$show);
        $smarty->assign('url',$url);
        $smarty->assign('user',$userName);
        $smarty->assign('num',$UNUM);
        $smarty->assign('sitedays',$sitedays);
        $smarty->display('admin/main.html');
        break;
}