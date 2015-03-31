<?php
/**
 * index.php 默认页
 * ----------------------------------------------------------------
 * OldCMS,site:http://www.oldcms.com
 */
include('init.php');

$do=Val('do','GET',0);
$dos=array('index','login','user','admin');

if(!in_array($do,$dos)) $do='index';

include(ROOT_PATH.'/source/'.$do.'.php');
?>