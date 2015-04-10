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

//用户表

$tbUser=$db->tbPrefix.'user';

//文章表
$tbArticle=$db->tbPrefix.'article';

$act=Val('act','GET');
switch($act){
    case "key":
        $title='邀请码管理';
        $sql="select * from ".$tbInviteReg." WHERE addKeyUser = '".$userName."' ORDER BY id DESC";
        $kconutsql="SELECT count(*) FROM   ".$tbInviteReg." WHERE addKeyUser = '".$userName."' ORDER BY id DESC";
        $href=URL_ROOT."/admin/key";
        $kpager = new Pager($kconutsql,$sql,$href,8,10,Val('pNO','GET',1));
        $keyinfo = $kpager->data;
        $smarty=InitSmarty();
        $smarty->assign('user',$userName);
        $smarty->assign('keyinfo',$keyinfo);
        $smarty->assign('url',$url);
        $smarty->assign('title',$title);
        $smarty->assign('info',$act);
        $smarty->assign('keynav',$kpager->nav);
        $smarty->display('admin/key.tpl');
        break;
    case "newKey":
        $i=0;
        $NewKeyNum=Val('keyNewNum','POST');
        while($i<$NewKeyNum) {
            $inviteKey = md5('ajdkSJHDa89awd898w98dadjawdaw' . $user->userId . time() . rand(100000, 999999));
            $sqlValue = array(
                'inviteKey' => $inviteKey,
                'addKeyUser' => $userName,
                'addTime' => time()
            );
            $db->AutoExecute($tbInviteReg,$sqlValue);
            $i++;
        }
        if($i == $NewKeyNum){
            ShowSuccess('操作成功,生成 '.$NewKeyNum.' 个邀请码',URL_ROOT."/admin/key");
        }else{
            ShowError('操作失败，请联系管理员',URL_ROOT.'/admin/key');
        }
        break;
    case "time":
        $title='时间轴文章管理';
        $sql="SELECT * FROM ".$tbArticle." ORDER BY id DESC ";
        $countsql="select count(*) from ".$tbArticle."  WHERE 1=1 ORDER BY id DESC";
        $href=URL_ROOT."/admin/time";;
        $tpager=new Pager($countsql,$sql,$href,20,10,Val('pNO','GET',1));
//        $timesData=$db->Dataset($sql);
        $tinfo=$tpager->data;
        $smarty=InitSmarty();
        $smarty->assign('info','time');
        $smarty->assign('url',$url);
        $smarty->assign('title',$title);
        $smarty->assign('tnav',$tpager->nav);
        $smarty->assign('timesData',$tinfo);
        $smarty->display('admin/time_list.tpl');
        break;
    case "x_time":
        $title ='时间轴文章修改';
        $id=Val('id','GET');
        $sql="SELECT * FROM ".$tbArticle." WHERE id='".$id."' LIMIT 0,1;";
        $edit=$db->Dataset($sql);
        $smarty=InitSmarty();
        $smarty->assign('info','time');
        $smarty->assign('edit',$edit);
        $smarty->display('admin/time.tpl');
        break;
    case "newTime":
        $title='时间轴文章发布';
        $smarty=InitSmarty();
        $smarty->assign('info','time');
        $smarty->assign('url',$url);
        $smarty->assign('title',$title);
        $smarty->display('admin/newTime.tpl');
        break;
    case "xx_times":
        $data =$_POST['content'];
        $id=Val('id','POST');
        $title =Val('title','POST');
        $datas=array(
            'content' => CleanEvilHTML($data),
            'username'=>$userName,
            'time'=>time(),
            'title'=>$title,
        );
        if(!empty($title)){
            if(!empty($data)){
                $db->AutoExecute($tbArticle,$datas,'UPDATE','1=1 AND id='.$id);
                ShowSuccess('修改时间轴文章成功!',URL_ROOT."/admin/time",'返回');
            }else{
                ShowError('内容不能为空，请重新填写.','javascript:history.go(-1)','返回上一页');
            }
        }else{
            ShowError('标题不能为空，请重新填写.','javascript:history.go(-1)','返回上一页');
        }
        break;
    case "times":
        $data =$_POST['content'];
        $title =Val('title','POST');
        $datas=array(
            'content' => CleanEvilHTML($data),
            'username'=>$userName,
            'time'=>time(),
            'title'=>$title
        );
        if(!empty($title)){
            if(!empty($data)){
                $db->AutoExecute($tbArticle,$datas,'INSERT',' 1=1');
                ShowSuccess('发布时间轴文章成功!',URL_ROOT."/admin/time",'返回');
            }else{
                ShowError('内容不能为空，请重新填写.','javascript:history.go(-1)','返回上一页');
            }
        }else{
            ShowError('标题不能为空，请重新填写.','javascript:history.go(-1)','返回上一页');
        }

        break;
    case "delTime":
        $id=Val('id','GET');
        $cc=$db->Delete($tbArticle,'id='.$id);
        if($cc == 1){
            ShowSuccess('删除文章成功',URL_ROOT.'/admin/time','返回文章列表');
        }else{
            ShowError('删除文章失败',URL_ROOT.'/admin/time','返回文章列表');
        }
        break;
    case "show":
        $sql="SELECT * FROM sky_article";
        $cc = $db->Dataset($sql);
        echo htmlspecialchars_decode($cc[0]['content']);

        break;
    case "usermanage":
        $sql="select * from ".$tbUser." ORDER BY id DESC";
        $ucountsql="SELECT count(*) FROM ".$tbUser." WHERE 1=1 ORDER BY id DESC";
        $href=URL_ROOT."/admin/usermanage";
        $upager=new Pager($ucountsql,$sql,$href,8,10,Val('pNO','GET',1));
        $uinfo = $upager->data;
        $umanage = $db->Dataset($sql);
        $smarty=InitSmarty();
        $smarty->assign('info','usermanage');
        $smarty->assign('uinfo',$uinfo);
        $smarty->assign('unav',$upager->nav);
        $smarty->assign('umanage',$umanage);
        $smarty->display('admin/umanage.tpl');
        break;
    case "deluser":
        $deluser=Val("uuuuid",'POST');
        $sql="DELETE  FROM ".$tbUser." WHERE userName='".$deluser."' LIMIT 1";
        if($db->Execute($sql)){
            ShowSuccess('删除用户 '.$deluser.' 成功!!',URL_ROOT.'/admin/usermanage');
        }else{
            ShowAError('删除用户 '.$deluser.' 失败,请联系管理员 sky@03sec.com',URL_ROOT.'/admin/usermanage');
        }
        break;
    default:
        $UNUM=$user->getUserNum();
        $smarty=InitSmarty();
        $title='后台管理面板';
        $smarty->assign('do',$do);
        $smarty->assign('show',$show);
        $smarty->assign('url',$url);
        $smarty->assign('user',$userName);
        $smarty->assign('num',$UNUM);
        $smarty->assign('sitedays',$sitedays);
        $smarty->assign('title',$title);
        $smarty->assign('info','');
        $smarty->display('admin/main.tpl');
        break;
}