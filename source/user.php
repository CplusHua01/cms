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
$artice=$db->tbPrefix.'article';
$tbUser=$db->tbPrefix.'user';

switch($act){
    case "sgk":
        require_once('sgk/sgk.inc.php');
        require_once('sgk/sgk.api.php');
        require_once('class/Security.class.php');
        $mod = $_POST["mode"];//取得搜索模式
        $md5 = $_POST["she"]; //取得关键字
        if ($md5 == "搜") {//普通搜素
            $keyToSearch = security::sky_g($_POST["key"]);
        }
        if ($md5 == "MD5^16") {//MD516位搜索
            $keyToSearch = substr(md5(security::sky_g($_POST["key"])), 8, 16);
        }
        if ($md5 == "MD5^32") {//md532位搜索
            $keyToSearch = md5(security::sky_g($_POST["key"]));
        }
        $cl = new SphinxClient();
        $cl->SetServer('10.0.117.10', 9312);                //设置spinx的服务器地址和端口
        $cl->SetArrayResult(true);                                  //设置 显示结果集方式
        $cl->SetLimits(0, 1000);                           //同sql语句中的LIMIT
        $cl->SetSortMode(SPH_SORT_RELEVANCE);                       //设置默认按照相关性排序
        $cl->SetMatchMode($_POST['mode']);
        if ($keyToSearch != " ")                   // 如果关键字为空 不执行 否则程序出错
            $result = $cl->Query($keyToSearch, "*");                 //执行搜索

        break;
    case "time":
        $sql="SELECT * FROM ".$artice."";
        $timeData=$db->Dataset($sql);
        $title='时间轴';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('title',$title);
        $smarty->assign('info','time');
        $smarty->assign('timeData',$timeData);
        $smarty->display('user/time.tpl');
        break;
    case "x_user":
        $title='帐号资料修改';
        $sql1='SELECT * FROM sky_user WHERE userName="'.$userName.'"';
        $u_data=$db->Dataset($sql1);
        $inviter=$u_data[0][inviter];
        $sql2='SELECT addKeyUser FROM sky_invite_reg WHERE inviteKey="'.$inviter.'"';
        $u_data2=$db->FirstColumn($sql2);
        $smarty=InitSmarty();
        if($_POST){
            $email=Val('email','POST');
            $oldPass=Val('oldPass','POST');
            $newPass=Val('newPass','POST');
            $cPass=Val('cPass','POST');
            if(!empty($email) || !preg_match('/^(\w+\.)*?\w+@(\w+\.)+\w+$/',$email)){
                if($email != $u_data[0][email] && empty($cPass) && empty($oldPass) && empty($newPass)){
                    $data=array(
                        'email'=>$email
                    );
                    if($db->AutoExecute($tbUser,$data,'UPDATE','userName="'.$userName.'"')){
                                ShowSuccess('恭喜您，修改邮箱成功！',URL_ROOT.'/user/x_user');
                            }else{
                                ShowError('修改失败,请联系管理员','mailto:sky@03sec.com');
                            }
                }elseif($email == $u_data && empty($cPass)&&empty($oldPass)&&empty($newPass)){
                    ShowError('您没有做任何修改','javascript:history.go(-1)');
                }else{
                    if($newPass == $cPass){
                        $oldp=$u_data[0][userPwd];
                        if(OCEncrypt($oldPass) == $oldp){
                            $data=array(
                                'email'=>$email,
                                'userPwd'=>OCEncrypt($cPass)
                            );
                            if($db->AutoExecute($tbUser,$data,'UPDATE','userName="'.$userName.'"')){
                                ShowSuccess('恭喜您，修改资料成功！！',URL_ROOT.'/logout','重新登录');
                            }else{
                                ShowError('修改失败,请联系管理员','mailto:sky@03sec.com');
                            }
                        }else{
                            ShowError('旧密码填写错误，如不需要修改密码，请为空','javascript:history.go(-1)');
                        }
                    }else{
                        ShowError('两次密码不一样,请重新输入','javascript:history.go(-1)');
                    }
                }
            }else{
                ShowError('email不可为空或者邮箱格式不正确,请重新输入','javascript:history.go(-1)');
            }
        }else{
            $smarty->assign('is_admin',$user->adminLevel);
            $smarty->assign('title',$title);
            $smarty->assign('addTime',$u_data[0][addTime]);
            $smarty->assign('lastip',$u_data[0][ip]);
            $smarty->assign('email',$u_data[0][email]);
            $smarty->assign('key_u',$u_data2[0]);
            $smarty->assign('info','time');
            $smarty->assign('username',$userName);
            $smarty->assign('timeData',$timeData);
            $smarty->display('user/user_setting.tpl');
        }

        break;
    case "newAvatar":
        $title='头像修改';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('title',$title);
        $smarty->assign('info','time');
        $smarty->assign('timeData',$timeData);
        $smarty->display('user/avatar.tpl');
        break;
    case "saveAvatar":

        break;
    case "xx_user":

        break;
    default:
        $title='社工库查询系统';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('user',$userName);
        $smarty->assign('title',$title);
        $smarty->assign('info','');
        $smarty->display('user/main.tpl');
}