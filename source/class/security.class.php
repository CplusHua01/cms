<?php
/**
 * Created by www.03sec.com.
 * User: sky
 * Date: 15/1/27
 * Time: 11:33
 * 正则表达式过滤函数 把特殊字符过滤，添加过滤规则请按照以下方法填写
 * $str=preg_replace("正则表达式","*",$str); //说明
 * 调用方法
 * 现 include 本文件
 * 然后用 sky_g(这里填写你需要过滤的变量)
 * 如
 * $str = "123~!@#$%^&*()_+{}:|<>?,./;'[]\-=`456";
 * $str = sky_g($str);
 * echo $str;
 * 最后输出的是
 * 123*,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,**,*456
 */
header("Content-Type: text/html; charset=utf-8");



class security {
    /*
     * 加强版的过滤
     * 用法:
     * security::sky_g($str)
     * */
    public static function sky_g($str){
        $str =strtolower($str);
        $str=str_replace("&amp;","&amp;amp;",$str);
        $str=str_replace("&gt;","&amp;gt;",$str);
        $str=str_replace("&lt;","&amp;lt;",$str);
        $str=str_replace(chr(32),"&amp;nbsp;",$str);
        $str=str_replace(chr(9),"&amp;nbsp;",$str);
        $str=str_replace(chr(34),"&amp;",$str);
        $str=str_replace(chr(39),"&amp;#39;",$str);
        $str=str_replace(chr(13),"&lt;br /&gt;",$str);
        $str=str_replace("select","sel&amp;#101;ct",$str);
        $str=str_replace("join","jo&amp;#105;n",$str);
        $str=str_replace("union","un&amp;#105;on",$str);
        $str=str_replace("where","wh&amp;#101;re",$str);
        $str=str_replace("insert","ins&amp;#101;rt",$str);
        $str=str_replace("delete","del&amp;#101;te",$str);
        $str=str_replace("update","up&amp;#100;ate",$str);
        $str=str_replace("like","lik&amp;#101;",$str);
        $str=str_replace("drop","dro&amp;#112;",$str);
        $str=str_replace("create","cr&amp;#101;ate",$str);
        $str=str_replace("modify","mod&amp;#105;fy",$str);
        $str=str_replace("rename","ren&amp;#097;me",$str);
        $str=str_replace("alter","alt&amp;#101;r",$str);
        $str=str_replace("cast","ca&amp;#115;",$str);
        $str = str_replace ( "?", "*?", $str );
        $str = str_replace ( "*", "*++*", $str );
        $str = str_replace ( "!", "*!", $str );
        $str = str_replace ( "~", "*~", $str );
        $str = str_replace ( "$", "*$", $str );
        $str = str_replace ( "%", "*%", $str );
        $str = str_replace ( "^", "*^", $str );
        $str = str_replace ( "&", "*&", $str );
        $str = str_replace ( "`", "*`", $str);
        $str = str_replace ( ">", "*>", $str);
        $str = str_replace ( "<", "*<", $str);
        $str = str_replace ( "/", "*/", $str);
        $str = str_replace ( "script", "*scr", $str);
        $str = str_replace ( "(", "*(", $str);
        $str = str_replace ( "\\", "*\\", $str);
        $str = str_replace ( "[", "*[", $str);
        $str = str_replace ( "]", "*]", $str);
        $str = str_replace ( "xss", "*xss", $str);
        $str = str_replace ( "+", "*+", $str);
        $str = str_replace ( "{", "*{", $str);
        $str = str_replace ( "}", "*}", $str);
        $str = str_replace ( "【", "*【", $str);
        $str = str_replace ( "】", "*】", $str);
        $str = str_replace ( "|", "*|", $str);
        $str = str_replace ( "svg", "*svg", $str);
        $str = str_replace ( "img", "*img", $str);
        $str = str_replace ( "src", "*ssrrcc", $str);
        $str = str_replace ( "href", "*hhrreeff", $str);
        $str = str_replace ( "=", "*=", $str);
        $str = str_replace ( "-", "*-", $str);
        $str = str_replace ( "style", "*ssttyyllee", $str);
        $str = str_replace( "title", "*title", $str );
        $str = str_replace( "#", "*#", $str );
        $str = str_replace( ",", "*,", $str );
        $str = str_replace( "，", "*，", $str );
        $str = str_replace( "。", "*。", $str );
        $str = str_replace( "；", "*；", $str );
        $str = str_replace( "‘", "*‘", $str );
        $str = str_replace( "’", "*’", $str );
        $str = str_replace( ";", "*;", $str );
        $str = str_replace( "'", "*'", $str );
        $str = str_replace( "\"", "*\"", $str );
        $str = str_replace( "(", "*(", $str );
        $str = str_replace( ")", "*)", $str );
        $str = str_replace( "_", "*_", $str );
        $str = str_replace( "alert", "al*rt", $str );
        return $str;
    }
    /*
     * 简单sql过滤
     * 用法:
     * security::sql($sqlstr)
     * */
    public static function sql($sqlstr){
        $sqlstr = strtolower($sqlstr);
        $sqlstr = str_replace( "alert", "al*rt", $sqlstr );
        $sqlstr = str_replace( "and", "al*rt", $sqlstr );
        $sqlstr = str_replace( "where", "al*rt", $sqlstr );
        $sqlstr = str_replace( "limit", "al*rt", $sqlstr );
        $sqlstr = str_replace( "from", "al*rt", $sqlstr );
        $sqlstr = str_replace( "select", "al*rt", $sqlstr );
        $sqlstr = str_replace( "svg", "al*rt", $sqlstr );
        $sqlstr = str_replace( "html", "al*rt", $sqlstr );
        return $sqlstr;
    }
/*
 *    AES加密解密
 *    用法：
 *    加密:security::encrypt($str,$key);
 *    解密:security::decrypt($str,$key);
 * */
    public static function encrypt($input, $key) {
        $size = mcrypt_get_block_size(MCRYPT_RIJNDAEL_128, MCRYPT_MODE_ECB);
        $input = Security::pkcs5_pad($input, $size);
        $td = mcrypt_module_open(MCRYPT_RIJNDAEL_128, '', MCRYPT_MODE_ECB, '');
        $iv = mcrypt_create_iv (mcrypt_enc_get_iv_size($td), MCRYPT_RAND);
        mcrypt_generic_init($td, $key, $iv);
        $data = mcrypt_generic($td, $input);
        mcrypt_generic_deinit($td);
        mcrypt_module_close($td);
        $data = base64_encode($data);
        return $data;
    }

    private static function pkcs5_pad ($text, $blocksize) {
        $pad = $blocksize - (strlen($text) % $blocksize);
        return $text . str_repeat(chr($pad), $pad);
    }

    public static function decrypt($sStr, $sKey) {
        $decrypted= mcrypt_decrypt(
            MCRYPT_RIJNDAEL_128,
            $sKey,
            base64_decode($sStr),
            MCRYPT_MODE_ECB
        );
        $dec_s = strlen($decrypted);
        $padding = ord($decrypted[$dec_s-1]);
        $decrypted = substr($decrypted, 0, -$padding);
        return $decrypted;
    }

}