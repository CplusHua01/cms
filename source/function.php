<?php
/**
 * function.php 方法库
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
if(!defined('IN_OLDCMS')) die('Access Denied');

/**
	DBConnect 数据库连接方法
	@param 	$configFile		string	数据库配置文件
	@return $db				object	BlueDB类对象
 */
function DBConnect($configFile='',$pconnect=false){
	if(!file_exists($configFile)) $configFile=ROOT_PATH.'/config.php';
	require($configFile);
	require_once(ROOT_PATH.'/source/class/DB.class.php');
	$db=BlueDB::DB($config['dbType']);
	$db->Connect($config['dbHost'],$config['dbUser'],$config['dbPwd'],$config['database'],$config['charset'],$config['tbPrefix'],$pconnect);
	return $db;
}

/* 获得Smarty对象 */
function InitSmarty($templatePath=''){
	global $do,$act,$show,$url;
	require_once(ROOT_PATH.'/libs/Smarty.class.php');
	$smarty=new Smarty;
	if(empty($templatePath)) $templatePath=TEMPLATE_PATH;
	$smarty->template_dir=$templatePath.'/templates';
	$smarty->compile_dir=$templatePath.'/templates_c';
	$smarty->assign('do',$do);
	$smarty->assign('act',$act);
	$smarty->assign('show',$show);
	$smarty->assign('url',$url);
	return $smarty;
}

/**
	OCEncrypt oldcms加密
	@param 	$str	string	待加密的字符
	@return $str	string	密码串
*/
function OCEncrypt($str){
	return md5('OldCMS|'.$str);
}

/* OCSetCookie setcookie封装 */
function OCSetCookie($name='',$value='',$expires=0,$path='/',$domain='',$httponly=true){
	$path=$httponly && PHP_VERSION < '5.2.0' ? "$path; HttpOnly" : $path;
	$secure=$_SERVER['SERVER_PORT']==443 ? 1 : 0;
	if(PHP_VERSION<'5.2.0'){
		setcookie($name,$value,$expires,$path,$domain,$secure);
	}else{
		setcookie($name,$value,$expires,$path,$domain,$secure,$httponly);
	}
}

/* 获得IP */
function IP(){
	return $_SERVER['REMOTE_ADDR'];
}

/* StripStr 过滤字符 */
function StripStr($str){
	if(get_magic_quotes_gpc()) $str=stripslashes($str);
	return addslashes(htmlspecialchars($str,ENT_QUOTES));
}

/* 获得http referer */
function HTTP_REFERER(){
	return $_SERVER['HTTP_REFERER'];
}

/**
	Val 获得提交的值
	@param 	$name		string			参数名
	@param 	$method		string			获取途径(GET/POST/COOKIE/REQUEST)
	@param 	$type		string/int		过滤类型('string'/0=>string,'int'/1=>int,其它/2=>不过滤)
	@param 	$isArray	int				0=>非数组,1=>数组
	@return $value		string/int	
*/
function Val($name,$method='GET',$type=0,$isArray=0){
	if($name=='' || !is_string($name)) return '';
	$method=strtoupper($method);
	switch($method){
		case 'GET':
			$value=$_GET[$name];
			break;
		case 'POST':
			$value=$_POST[$name];
			break;
		case 'COOKIE':
			$value=$_COOKIE[$name];
			break;
		case 'REQUEST':
			$value=$_REQUEST[$name];
			break;
		default:break;
	}
	$isArray=intval($isArray);
	switch($type){
		case 0:
		case 'string':
			$value=($isArray==0) ? StripStr($value) : array_map('StripStr',(array)$value);
			break;
		case 1:
		case 'int':
			$value=($isArray==0) ? intval($value) : array_map('intval',(array)$value);
			break;
		case 2:
		default:break;
	}
	return $value;
}
/* json_enocde */
function JsonEncode($value){
	return json_encode($value);
}
/* json_decode */
function JsonDecode($value,$assoc=false){
	return json_decode($value,$assoc);
}

/* 正确提示 */
function ShowSuccess($str='',$turnto=URL_ROOT,$urltitle='返回'){
	Notice($str,$turnto,3,'success',$urltitle);
}

/* 错误提示 */
function ShowError($str='',$turnto=URL_ROOT,$urltitle='返回'){
	Notice($str,$turnto,3,'error',$urltitle);
}

/* 统一提示方法 */
function Notice($str='',$turnto=URL_ROOT,$time=3,$style='success',$urltitle){
	global $show,$url;
	$notice=array(
		'str'=>$str,
		'turnto'=>$turnto,
		'time'=>$time,
		'style'=>$style,
		'urltitle'=>$urltitle
	);
	$smarty=InitSmarty();
	$smarty->assign('show',$show);
	$smarty->assign('url',$url);
	$smarty->assign('notice',$notice);
	$smarty->display('notice.html');
	exit;
}

/* Ajax 提示 */
function ShowAError($content='操作失败'){
	die(JsonEncode(array('error'=>1,'content'=>$content)));
}
function ShowASuccess($content='操作成功',$data=array()){
	$return=array('error'=>0,'content'=>$content);
	if(!empty($data)) $return['data']=$data;
	die(JsonEncode($return));
}

/* UBB To HTML */
function UBBToHTML($str=''){
	if(!empty($str)){
		$str=preg_replace("/\[(b|i|u)\](.*?)\[\/\\1\]/is","<$1>$2</$1>",$str);
		$str=preg_replace("/\[code\](.*?)\[\/code]/ise","DoCode('$1')",$str);
		$str=str_replace("\n",'<br />',$str);
		$str=preg_replace("/\[link\s+?href=(\'\"|&quot;)(.*?)\\1\](.*?)\[\/link\]/i","<a target=\"_blank\" href=\"$2\">$3</a>",$str); //链接
		$str=preg_replace("/\[img\s+?src=(\'\"|&quot;)([\w\:\/\.]*?\/\w+?\.(jpg|jpeg|gif|png))\s*?\\1(\s+alt=(\'\"|&quot;)(.*?)\\5\s*?)?\/]/i","<a target=\"_blank\" href=\"$2\" title=\"$6\"><img src=\"$2\" alt=\"$6\" /></a>",$str); //图片
		$str=preg_replace("/\[video\s+?href=(\'\"|&quot;)([\w\:\/\.]*?\/\w+?\.swf)\s*?\\1\/]/i","<embed src=\"$2\" type=\"application/x-shockwave-flash\" allowscriptaccess=\"never\" allowfullscreen=\"true\" wmode=\"opaque\" width=\"480\" height=\"400\"></embed>",$str); //视频
		$str=str_replace('  ','&nbsp;&nbsp;',$str);
		$str=str_replace("\t",'&nbsp;&nbsp;',$str);
	}
	return $str;
}
function DoCode($str){
	$str=trim($str);
	return '<code>'.$str.'</code>';
}

/* 获得文件后缀 */
function FileSuffix($name){
	$lastPos=strrpos($name,'.');
	$suffix=$lastPos ? substr($name,$lastPos+1,strlen($name)-$lastPos) : '';
	return strtolower($suffix);
}

/* GetTimeShow $time的人性化显示 */
function GetTimeShow($time=0){
	$diff=time()-$time;
	$num=0;
	$unit='';
	if($diff<60){
		$num=$diff;
		$unit='秒';
	}elseif($diff<3600){
		$num=intval($diff/60);
		$unit='分钟';
	}elseif($diff<86400){
		$num=intval($diff/3600);
		$unit='小时';
	}elseif($diff<2592000){
		$num=intval($diff/86400);
		$unit='天';
	}elseif($diff<31104000){
		$num=intval($diff/2592000);
		$unit='月';
	}else{
		$num=intval($diff/31104000);
		$unit='年';
	}
	return $num.$unit.'前';
}

/* 发送邮件 */
function SendMail($to='',$subject='',$body=''){
	global $mailConfig;
	require_once(ROOT_PATH.'/source/class/PHPMailer.class.php');
	try{
		$mail = new PHPMailer();							// New instance, with exceptions enabled
		switch($mailConfig['mailer']){						// tell the class to use SMTP/Mail/Sendmail/Qmail
			case 'smtp':
				$mail->IsSMTP();
				$mail->SMTPAuth   = true;					// enable SMTP authentication
				$mail->Host       = $mailConfig['host'];	// SMTP server
				$mail->Port       = $mailConfig['port'];	// set the SMTP server port
				$mail->Username   = $mailConfig['username'];// SMTP server username
				$mail->Password   = $mailConfig['password'];// SMTP server password
				break;
			case 'mail':
				$mail->IsMail();
				break;
			case 'sendmail':
				$mail->IsSendMail();
				break;
			case 'qmail':
				$mail->IsQMail();
				break;
			default:
				return false;
				break;
		}
		$mail->CharSet    = $mailConfig['charset'];
		$mail->Encoding   = 'base64';
		$mail->SMTPDebug  = false;
		$mail->AddReplyTo($mailConfig['username'],$mailConfig['name']);
	
		$mail->From       = $mailConfig['username'];
		$mail->FromName   = $mailConfig['name'];
		$mail->AddAddress($to);
	
		$mail->Subject  = $subject;
		$mail->WordWrap   = 80;
		$mail->MsgHTML($body);
		$mail->IsHTML($mailConfig['contentType'] ? true : false);
		$mail->Send();
		return true;
	}catch(phpmailerException $e){
		return false;
	}
}

/* Tb 获取table name */
function Tb($name){
	return TABLE_PREFIX.$name;
}

/* 短网址字符 */
function ShortUrlCode($existed=array(),$num=6){
	$str='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$len=strlen($str);
	$code='';
	for($i=0;$i<$num;$i++){
		$k=rand(0,$len-1);
		$code.=$str[$k];
	}
	if(in_array($code,$existed)) $code=ShortUrlCode($existed,$num);
	return $code;
}

/* 截取字符 utf8 */
function truncate_utf8($string,$length,$etc='...'){  
	$result=''; 
	$string=html_entity_decode(trim(strip_tags($string)),ENT_QUOTES,'UTF-8'); 
	$strlen=strlen($string);  
	for($i=0;(($i<$strlen)&&($length>0));$i++){  
		if($number=strpos(str_pad(decbin(ord(substr($string,$i,1))),8,'0',STR_PAD_LEFT),'0')){  
			if($length<1.0) break;  
			$result.=substr($string,$i,$number);  
			$length-=1.0;  
			$i+=$number-1;  
		}else{  
			$result.=substr($string,$i,1);  
			$length-=0.5;  
		}  
	}  
	$result=htmlspecialchars($result,ENT_QUOTES,'UTF-8');  
	if($i<$strlen) $result.=$etc;
	return $result;  
}

/* 去HTML */
function CleanHTML($str){
	$str=strip_tags($str);
	return $str;
}

/* 去恶意HTML，防XSS */
function CleanEvilHTML($html){
	$allowtags = 'img|a|font|div|table|tbody|caption|tr|td|th|br|p|b|strong|i|u|em|span|ol|ul|li|blockquote|object|param|embed';
	$skipkeys = array('onabort','onactivate','onafterprint','onafterupdate','onbeforeactivate','onbeforecopy','onbeforecut','onbeforedeactivate','onbeforeeditfocus','onbeforepaste','onbeforeprint','onbeforeunload','onbeforeupdate','onblur','onbounce','oncellchange','onchange','onclick','oncontextmenu','oncontrolselect','oncopy','oncut','ondataavailable','ondatasetchanged','ondatasetcomplete','ondblclick','ondeactivate','ondrag','ondragend','ondragenter','ondragleave','ondragover','ondragstart','ondrop','onerror','onerrorupdate','onfilterchange','onfinish','onfocus','onfocusin','onfocusout','onhelp','onkeydown','onkeypress','onkeyup','onlayoutcomplete','onload','onlosecapture','onmousedown','onmouseenter','onmouseleave','onmousemove','onmouseout','onmouseover','onmouseup','onmousewheel','onmove','onmoveend','onmovestart','onpaste','onpropertychange','onreadystatechange','onreset','onresize','onresizeend','onresizestart','onrowenter','onrowexit','onrowsdelete','onrowsinserted','onscroll','onselect','onselectionchange','onselectstart','onstart','onstop','onsubmit','onunload','javascript','script','eval','behaviour','expression','style','class');
	preg_match_all("/\<([^\<]+)\>/is", $html, $ms);
	if($ms[1]) {
		$ms[1] = array_unique($ms[1]);
		foreach ($ms[1] as $value) {
			$searchs[] = "<".$value.">";
			$value = htmlspecialchars($value);
			$value = str_replace(array('\\','/*'), array('.','/.'), $value);
			$skipstr = implode('|', $skipkeys);
			$value = preg_replace(array("/($skipstr)/i"), '.', $value);
			if(!preg_match("/^[\/|\s]?($allowtags)(\s+|$)/is", $value)) {
				$value = '';
			}
			$replaces[] = empty($value)?'':"<".str_replace('&quot;', '"', $value).">";
		}
	}
	$html = str_replace($searchs, $replaces, $html);
	return $html;
}

/* 抓取请求 */
function Request($url,$data='',$headers) {
	if(empty($headers['UserAgent'])) $headers['UserAgent']='Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_5) Chrome/29.0';
	$ch=curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_HEADER, 0);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
	if(!empty($data)){
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	}
	curl_setopt($ch, CURLOPT_USERAGENT, $headers['UserAgent']);
	if(!empty($headers['COOKIE'])){
		curl_setopt($ch, CURLOPT_COOKIE, $headers['COOKIE']);
	}
	$requestHeaders=array(
		'Accept-Language: zh-CN',
		'Connection: keep-alive',
		'Cache-Control: no-cache'
	);
	if(!empty($headers['Referer'])) $requestHeaders[]='Referer: '.$headers['Referer'];
	curl_setopt($ch,CURLOPT_HTTPHEADER,$requestHeaders);
		 
	$result=curl_exec($ch);
	$ret_code=curl_getinfo($ch,CURLINFO_HTTP_CODE);
	$error=curl_errno($ch);
	curl_close($ch);
	if($ret_code!=200) return false;
	if(is_int($error) && $error>0) return array('error'=>$error);
	return $result;
}
?>