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
//获取当前用户名
$userName=$user->userName;

//连接数据库
$db=DBConnect();

//邀请码表
$tbInviteReg=$db->tbPrefix.'invite_reg';

$act=Val('act','GET');
switch($act){
    case "key":
        $sql="select * from ".$tbInviteReg." WHERE addKeyUser = '".$userName."' ORDER BY id DESC";
        $keyinfo = $db->Dataset($sql);
        $smarty=InitSmarty();
        $smarty->assign('user',$userName);
        $smarty->assign('keyinfo',$keyinfo);
        $smarty->assign('url',$url);
        $smarty->display('admin/key.tpl');
        break;
    case "newKey":
        $i=0;
        $NewKeyNum=Val('keyNewNum','POST');
        while($i<=$NewKeyNum) {
            $inviteKey = md5('ajdkSJHDa89awd898w98dadjawdaw' . $user->userId . time() . rand(100000, 999999));
            $sqlValue = array(
                'inviteKey' => $inviteKey,
                'addKeyUser' => $userName,
                'addTime' => time()
            );
            $db->AutoExecute($tbInviteReg,$sqlValue);
            $i++;
        }
        if($i-1 == $NewKeyNum){
            ShowSuccess('操作成功,生成 '.$NewKeyNum.' 个邀请码',URL_ROOT."/admin/key");
        }else{
            ShowError('操作失败，请联系管理员',URL_ROOT.'/admin/key');
        }
        break;
    default:
        $UNUM=$user->getUserNum();
        $smarty=InitSmarty();
        $smarty->assign('do',$do);
        $smarty->assign('show',$show);
        $smarty->assign('url',$url);
        $smarty->assign('user',$userName);
        $smarty->assign('num',$UNUM);
        $smarty->assign('sitedays',$sitedays);
        $smarty->display('admin/main.tpl');
        break;
}