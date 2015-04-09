<?php
/**
 * init.php 初始化信息
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
define('IN_OLDCMS',true);
define('ROOT_PATH',dirname(__FILE__));

include(ROOT_PATH.'/config.php');
//调试模式
if($config['debug']==false){
	error_reporting(0);
}else{
	ini_set('display_errors',1);
	error_reporting(E_ALL & ~E_NOTICE);
}

define('URL_ROOT',$config['urlroot']);
define('URL_REWRITE',$config['urlrewrite']);
define('REGISTER',$config['register']);
define('MAIL_AUTH',$config['mailauth']);
define('FILE_PATH',$config['filepath']);
define('FILE_PREFIX',$config['fileprefix']);
/* 模板判断 */
$template=$config['template'];
define('TEMPLATE_PATH',ROOT_PATH.'/themes/'.$template);
define('EXPIRES',$config['expires']);
define('TABLE_PREFIX',$config['tbPrefix']);

include(ROOT_PATH.'/source/function.php');
include(ROOT_PATH.'/source/global.func.php');
include(ROOT_PATH.'/source/class/User.class.php');
include(ROOT_PATH.'/source/class/Pager.class.php');
include(ROOT_PATH .'/source/class/Security.class.php');




//显示设置
$show=$config['show'];

//积分设置
$pointConfig=$config['point'];

//mail设置
$mailConfig=$config['mail'];

//时区设置
@date_default_timezone_set($config['timezone']);

//url设置
$url=array();
$url['root']			=$config['urlroot'];
$url['imagePath']		=FILE_PREFIX.'/image/';
$url['themePath']		=$url['root'].'/themes/'.$template;
$url['adminStyle']      =$url['themePath'].'/templates/admin/style/';
$url['userStyle']      =$url['themePath'].'/templates/user/style/';
$url['login']          =URL_ROOT.'login';


$urlDoArray=array('login','register','user','login','logout');
if($config['urlrewrite']){
	$url['rewrite']		=1;
	foreach($urlDoArray as $value){
		$url[$value]=$url['root']."/{$value}";
	}
}else{
	$url['rewrite']		=0;
	foreach($urlDoArray as $value){
		$url[$value]=$url['root'].'/index.php?do='.$value;
	}
}

//用户初始化
$user=new User();
if($user->userId>0){
	$show['user']=array(
		'userId' 		=>$user->userId,
		'email'			=>$user->email,
		'userName'		=>$user->userName,
		'adminLevel'	=>$user->adminLevel,
		'token'			=>$user->token,
		'avatarImg'		=>$user->avatarImg,
		'avatarImg_s'	=>$user->avatarImg_s,
		'signature'		=>$user->signature
	);
}

unset($config); //清理config

?>