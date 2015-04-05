<?php
/**
 * Created by www.03sec.com.
 * User: sky
 * Date: 15/4/3
 * Time: 10:49
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
$userName=$user->userName;
$db=DBConnect();
$act=Val('act','GET');
switch($act){
    case "sgk":
        $title='社工库查询系统';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('user',$userName);
        $smarty->assign('title',$title);
        $smarty->assign('info','');
        $smarty->display('user/main.tpl');
        break;
    case "time":
        $title='时间轴';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('title',$title);
        $smarty->assign('info','time');
        $smarty->display('user/time.tpl');
        break;
    default:
        $title='用户管理面板';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('user',$userName);
        $smarty->assign('title',$title);
        $smarty->assign('info','');
        $smarty->display('user/main.tpl');
}