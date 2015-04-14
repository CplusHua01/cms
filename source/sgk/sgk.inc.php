<?php
/**
 * Created by www.03sec.com.
 * User: sky
 * Date: 15/4/10
 * Time: 10:37
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
//社工库服务器配置信息
if(!defined('IN_OLDCMS')) die('Access Denied');
//define('DB_HOST','127.0.0.1');        //社工库服务器IP
define('DB_HOST','10.0.117.12');        //社工库服务器IP
define('DB_USER','root');                //社工库服务器 mysql 的user（切记开启允许改用户外联，如果是本机请忽略）
define('DB_PASS','25251325');             //社工库服务器 mysql 的password
define('DB_DATABASE','sgk');            //社工库服务器所在的数据库名
//以下是数据库服务器连接信息
$con=mysqli_connect(DB_HOST,DB_USER,DB_PASS);
if (!$con)
{
    die('社工库数据服务器连接失败');
}
mysqli_select_db($con,DB_DATABASE);      //选择数据库
mysqli_query($con,"SET NAMES 'utf8'");        //设置编码
mysqli_query($con,"SET CHARACTER_SET_CLIENT=utf8");   //设置编码
mysqli_query($con,"SET CHARACTER_SET_RESULTS=utf8");  //设置编码