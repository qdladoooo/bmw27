<?php
//init path to document_root
chdir(dirname(__DIR__));

//for dump
ini_set("display_errors","On");
error_reporting(E_WARNING);

//all you need is here!
require_once 'config/pagebase.php';

//poor page route
preg_match('/^[a-zA-Z\/]+/', $_SERVER['REQUEST_URI'], $matches);
$ar = explode('/', $matches[0]);
if(!empty($ar[1]) && !empty($ar[2]) && file_exists("components/{$ar[1]}/{$ar[2]}.php")) {
	include_once "components/{$ar[1]}/{$ar[2]}.php";
	$content = fetch("{$ar[1]}/{$ar[2]}.html");
} else {
	include_once 'components/error/404.php';
	$content = fetch("error/404.html");
}
assign('content', $content);
display('layout/layout.html');
