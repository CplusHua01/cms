<?php
/**
 * index.php 默认页
 * ----------------------------------------------------------------
 *
 */
include('init.php');

$do=Val('do','GET',0);
$dos=array('index','login','user','admin','register');

if(!in_array($do,$dos)) $do='index';

include(ROOT_PATH.'/source/'.$do.'.php');
?>