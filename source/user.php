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
$tbartice=$db->tbPrefix.'article';
$tbUser=$db->tbPrefix.'user';

switch($act){
    case "sgk":






        $p=Val('p','GET');
        $p=($p<1) ? 0 : $p ;
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
        $sp = new SphinxClient();
        $sp->SetServer('10.211.55.14', 9312);                //设置spinx的服务器地址和端口
        $sp->SetArrayResult(true);                                  //设置 显示结果集方式
        $sp->SetLimits($p*10,10);                           //同sql语句中的LIMIT
        $sp->SetSortMode(SPH_SORT_RELEVANCE);                       //设置默认按照相关性排序
        $sp->SetMatchMode($mod);
        if ($keyToSearch != " ")                   // 如果关键字为空 不执行 否则程序出错
            $result = $sp->Query($keyToSearch, "*");                 //执行搜索
        $count = $result['total'];
        //计算一共多少页
        $pn=(ceil($count / 10));
//        echo $pn;
//        $count = $result['total'];
//        $start = $count / 2;
//        $offset= 2 * $start;
//        echo $start;
//        echo "<br>";
//        echo $offset;
//        $sp->SetLimits($start,$offset);




        if(is_array($result['matches'])) {
            $sql_id = array();
            foreach ($result['matches'] as $k => $v) {
                $sql_id[$i] = $v["id"];
                $i++;
            }
            $sql_query = array();
            foreach ($sql_id as $id) {
                $sql = "select * from shegongku  where id =" . $id;
                $sql_query[$i] = $sql;
                $i++;
            }
            function dis_td($sql, $sgk_con)
            {
                $result = mysqli_query($sgk_con, $sql);
                if($result){
//                    $rows=array();
                    while ($row = mysqli_fetch_array($result)) {
//                        $rows[0]=$row;
                        return $row;
                    }
                    mysqli_free_result($result);
//                    return $rows;
                }

            }

                $smarty = InitSmarty();
                //print_r($sql_query);exit;
//                print_r(dis_td($sql,$con));
            $i=0;
            $arr=array();
            foreach ($sql_query as $sql) {
                    $sgk_data = dis_td($sql, $con);
                    array_push($arr,$sgk_data);
                    $i++;
                }
            $smarty->assign('num',$count);
            $smarty->assign('olPage',$i);
            $smarty->assign('pn',$pn);
            $smarty->assign('key',$keyToSearch);
                $smarty->assign('datas',$arr);
                $smarty->display('user/sgk_data.tpl');

            }

        break;











    case "time":
        $sql="SELECT * FROM ".$tbartice." ORDER BY id DESC ";
        $timeData=$db->Dataset($sql);
        $title='时间轴';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('Av',$user->avatarImg);
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
            $smarty->assign('Av',$user->avatarImg);
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
        $smarty->assign('Av',$user->avatarImg);
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('Av_y',$user->avatarImg_b);

        $smarty->assign('title',$title);
        $smarty->assign('info','time');
        $smarty->assign('timeData',$timeData);
        $smarty->display('user/avatar.tpl');
        break;
    case "saveAvatar":
        //实例化Image类，传入实例的值
        $img = new Image($_FILES[upimg]);
        //定义生成的图片名,防止重名
        $imgName=mt_rand();
        $imgName.=date("YmdHis",time());

        $filetype = $_FILES['upimg']['type'];
        //判断图片后缀
        if($filetype == 'image/jpeg'){
            $type = '.jpg';
        }
        if ($filetype == 'image/jpg') {
            $type = '.jpg';
        }
        if ($filetype == 'image/pjpeg') {
            $type = '.jpg';
        }
        if($filetype == 'image/gif'){
            $type = '.gif';
        }
        if ($filetype == 'image/png'){
            $type ='.png';
        }
        $imgName.=$type;
        //进行上传图片
        $img->Upload(AV_UPPATH.'/'.$imgName);
        //判断是否有错误信息返回
        if($img->error){
            ShowError($img->error,URL_ROOT.'/user/newAvatar');
            echo $img->error;
        }else{
            //进行头像缩略
            if($img->Resize(AV_UPPATH.'/'.$imgName,60,60,AV_UPPATH.'/s1_'.$imgName)){
                $avpath=AV_PATH.'s1_'.$imgName;
                //再次生成一个200*200的图片。方便在面板展示
                if($img->Resize(AV_UPPATH.'/'.$imgName,200,200,AV_UPPATH.'/s2_'.$imgName)){
//                    echo '头像地址:'.$avpath;
//                    echo "<br>";
//                    echo '展示的200x200的地址:'.AV_PATH.'s2_'.$imgName;
//                    echo "<br>";
//                    echo '原图地址:'.AV_PATH.'/'.$imgName;
                    //入库
                    $data=array(
                        'avatarImg'=>AV_PATH.'s1_'.$imgName,
                        'avatarImg_b'=>AV_PATH.'s2_'.$imgName,
                        'avatarImg_s'=>AV_PATH.'/'.$imgName
                    );
                    if($db->AutoExecute($tbUser,$data,'UPDATE',"userName='{$userName}'")){
                        ShowSuccess('头像上传成功,重新登录后生效',URL_ROOT.'/logout','重新登录');
//                        echo '入库成功！';
                    }else{
                        ShowError('头像上传失败!',URL_ROOT.'/user/newAvatar');
//                        echo '入库失败';
                    }
                }else{
//                    echo '缩略图片失败';
                }
            }else{
//                echo '缩略图片失败';
            }

        }
        break;
    default:
        $title='社工库查询系统';
        $smarty=InitSmarty();
        $smarty->assign('is_admin',$user->adminLevel);
        $smarty->assign('Av',$user->avatarImg);
        $smarty->assign('user',$userName);
        $smarty->assign('title',$title);
        $smarty->assign('info','');
        $smarty->display('user/main.tpl');
}