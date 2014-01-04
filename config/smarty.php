<?php
//向上引用，使用全路径
require_once 'vendors/smarty/Smarty.class.php';

$smarty = new Smarty;
$smarty->template_dir = 'templates';
$smarty->config_dir = 'data/smarty/config';
$smarty->cache_dir = 'data/smarty/cached';
$smarty->compile_dir = 'data/smarty/compile';
$smarty->left_delimiter = "{#"; //左标签
$smarty->right_delimiter = "#}"; //右标签

function assign($role, $acting) {
	global $smarty;
	$smarty->assign($role, $acting);
} 

function display($resource_name) {
	global $smarty;
	$smarty->display($resource_name);
}

function fetch($resource_name) {
	global $smarty;
	return $smarty->fetch($resource_name);
}



