<?php
require_once 'config/const.php';
require_once 'config/smarty.php';

//for dump
if(__IS_DEVELOPING) {
	ini_set("display_errors","On");
	error_reporting(E_ALL);
}

//autoload
spl_autoload_register(function($class_name) {
	$class_name = lcfirst($class_name);
	if ( file_exists( "libs/{$class_name}.php" ) ) {
		include_once "libs/{$class_name}.php";
		return true;
	}
	return false;
});

//get model object
function M($class_name) {
	$file_name = lcfirst($class_name);
	if ( file_exists( "models/{$file_name}.php" ) ) {
		include_once "models/{$file_name}.php";
		return new $class_name;
	}
	return false;
}

