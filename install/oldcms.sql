#oldcms database
drop database if exists oldcms;
create database oldcms default character set utf8;
use oldcms;

#user 用户
drop table if exists oc_user;
create table oc_user
(
	id int auto_increment primary key,
	adminLevel tinyint(1) default 0, #管理级别:0,普通用户;1,管理员 
	userName varchar(50),			
	userPwd varchar(50),
	email varchar(255),
	validated tinyint(1) default 0,  #邮箱是否验证
	validateKey varchar(255),	#邮箱验证key
	sex tinyint(1) default 0,	#0,保密;1,男;2,女
	avatarImg varchar(255),		#头像64
	avatarImg_b varchar(255),	#大头像200
	avatarImg_s varchar(255),	#小头像30
	signature varchar(255),		#签名
	creditPoint int default 0,	#积分
	rankPoint int default 0,	#经验值
	description varchar(255),
	status tinyint default 0,	#状态 0,正常;1,冻结;2,已删除
	contentNum int default 0,	#内容数
	attentNum int default 0,	#被关注数
	hotNum int default 0,		#热度
	loginTime int default 0,	#最近登录时间
	addTime int default 0
) engine=MyISAM charset=utf8;
insert into oc_user(id,adminLevel,userName,userPwd,email,addTime) values(1,1,'blue','8dc44dc22fdf8df1f5d191dbe13e2a22','010blue@gmail.com',UNIX_TIMESTAMP());	#默认用户：blue,密码：123456

#session 登陆session
drop table if exists oc_session;
create table oc_session
(
	userId int default 0,
	ocKey varchar(50),
	token varchar(50),
	ip char(20),
	data text,
	expires int default 0,
	updateTime int default 0,
	addTime int default 0,
	key userId(userId),
	key ocKey(ocKey),
	key expires(expires),
	key updateTime(updateTime)
) engine=MyISAM charset=utf8;


#invite_reg 邀请注册
drop table if exists oc_invite_reg;
create table oc_invite_reg
(
	id int auto_increment primary key,
	userId int default 0,
	inviteKey varchar(255),		#邀请key
	isUsed tinyint(1) default 0,#是否使用
	regUserId int default 0,	#注册用户id
	regTime int default 0,		#注册时间
	addTime int default 0,
	key userId(userId)
) engine=MyISAM charset=utf8;