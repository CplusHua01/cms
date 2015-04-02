<?php
/**
 * register.php 注册
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied');
if(REGISTER=='close') ShowError('注册功能已关闭');

$act=Val('act','GET');
switch($act){
	case 'checkue':
		$username=Val('user','POST');
		$email=Val('email','POST');
        $email =strtolower($email);
		$db=DBConnect();
		$tbUser=$db->tbPrefix.'user';
		$userExisted=$db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE userName='{$username}'");
		$emailExisted=$db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE email='{$email}'");
		echo $userExisted.'|'.$emailExisted;
		break;
	case 'submit':
		if($user->userId>0) ShowError('您已登录,不能进行注册');
		$db=DBConnect();
		$key=Val('key','POST');
		if(!empty($key)){
			$tbInviteReg=$db->tbPrefix.'invite_reg';
			$inviteRow=$db->FirstRow("SELECT id,userId FROM {$tbInviteReg} WHERE inviteKey='{$key}' AND isUsed=0");
		}
		if(REGISTER=='invite'){
			if(empty($key)) ShowError('本站目前仅能邀请注册');
			if(empty($inviteRow)) ShowError('你的邀请码不正确或已作废');
		}
		$username=Val('user','POST');
		$email=Val('email','POST');
		$userpwd=Val('pwd','POST');
        $userpwd2=Val('pwd2','POST');
        $email =strtolower($email);
		//判断格式
		if(empty($username) || !preg_match('/^[\w\x{4e00}-\x{9fa5}]{2,20}$/u',$username)) ShowError('用户格式不正确',$url['register'],'重新填写');
		if(empty($email) || !preg_match('/^(\w+\.)*?\w+@(\w+\.)+\w+$/',$email)) ShowError('邮箱格式不正确',$url['register'],'重新填写');
		if(empty($userpwd) || !preg_match('/^.{6,20}$/',$userpwd)) ShowError('密码应为6-20位字符',$url['register'],'重新填写');
        //判断两次密码输入是否一致
        if($userpwd!=$userpwd2) ShowError("两次密码输入不一样",'javascript:history.back(-1)','重新填写');
		$tbUser=$db->tbPrefix.'user';
		//用户是否存在
		$userExisted=$db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE userName='{$username}'");
		if($userExisted>0) ShowError("用户{$username}已存在",$url['register'],'重新填写');
		//邮箱是否存在
		$emailExisted=$db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE email='{$email}'");
		if($emailExisted>0) ShowError("邮箱{$email}已存在",$url['register'],'重新填写');
		//邮箱验证key
		$validateKey=OCEncrypt($username.$email.time().rand(100000,999999));
		//入库
		$executeArr=array('userName'=>$username,'userPwd'=>OCEncrypt($userpwd),'email'=>$email,'validated'=>(MAIL_AUTH ? 0 :1 ),'validateKey'=>$validateKey,'addTime'=>time());
		if($db->AutoExecute($tbUser,$executeArr)){
			if(!empty($inviteRow)){
				$regUserId=$db->LastId();
				//邀请奖励
				$pointAward=intval($pointConfig['award']['invitereg']);
				if($pointAward>0){
					$db->Execute("UPDATE {$tbUser} SET hotNum=hotNum+1,creditPoint=creditPoint+{$pointAward},rankPoint=rankPoint+{$pointAward} WHERE id='{$inviteRow[userId]}'");
					Remind('用户 <a href="'.UrlUser($regUserId,$username).'">'.$username.'</a> 通过你的邀请注册,已奖励你 '.$pointAward.' 积分',$inviteRow['userId']);
				}
				$db->Execute("UPDATE {$tbInviteReg} SET isUsed=1,regUserId='{$regUserId}',regTime='".time()."' WHERE id='{$inviteRow[id]}'");
			}
			if(MAIL_AUTH){
				$validateUrl=UrlValidate($validateKey);
				//邮件验证
				SendMail($email,"来自{$show[sitename]}的验证邮件","你好，<br />感谢注册{$show[sitename]}({$show[sitedesc]})，请点击下面的链接激活您的账号：<br /><a target='_blank' href='{$validateUrl}'>{$validateUrl}</a><br />如果无法点击，请复制到浏览器地址栏直接访问。<br /><a href='".URL_ROOT."' target='_blank'>{$show[sitename]}</a>");
			}
			//自动登录
			$user->Login($username,$userpwd,1);
			ShowSuccess('注册成功');
		}else{
			ShowError('出错了,请与管理员联系');
		}
		break;
	case 'validate':
		$key=Val('key','GET');
		$db=DBConnect();
		$tbUser=$db->tbPrefix.'user';
		$existed=$db->FirstValue("SELECT COUNT(*) FROM {$tbUser} WHERE validateKey='{$key}' AND validated=0");
		if($existed<=0) ShowError('验证链接不存在或已失效');
		$db->Execute("UPDATE {$tbUser} SET validated=1 WHERE validateKey='{$key}'");
		ShowSuccess('验证成功,欢迎加入'.$show['sitename'],$url['login'],'登录');
		break;
	default:
		if($user->userId>0) ShowError('您已登录,不能进行注册');
		$key=Val('key','GET');
		if(REGISTER=='invite' && empty($key)) ShowError('本站目前仅能邀请注册');
		$smarty=InitSmarty();
		$smarty->assign('do',$do);
		$smarty->assign('register',REGISTER);
		$smarty->assign('key',$key);
		$smarty->assign('show',$show);
		$smarty->assign('url',$url);
		$smarty->display('admin/register.tpl');
		break;
}
?>