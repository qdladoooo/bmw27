<?php
require_once 'config/const.php';
require_once 'config/smarty.php';

//for dump
ini_set("display_errors","On");
error_reporting(E_ALL);

//autoload
spl_autoload_register(function($class_name) {
	$class_name = lcfirst($class_name);
	if ( file_exists( "libs/{$class_name}.php" ) ) {
		include_once "libs/{$class_name}.php";
		return true;
	}
	return false;
});

