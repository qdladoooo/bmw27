<?php
//init path to document_root
chdir(dirname(__DIR__));

//tell php to shut up
date_default_timezone_set('Asia/Shanghai');

//all you need is initialize here!
require_once 'config/pagebase.php';

//poor page route
preg_match('/^[a-zA-Z\/]+/', $_SERVER['REQUEST_URI'], $matches);
$ar = explode('/', $matches[0]);

$ar[1] = empty($ar[1]) ? 'index' : $ar[1];
$ar[2] = empty($ar[2]) ? 'index' : $ar[2];
if(file_exists("components/{$ar[1]}/{$ar[2]}.php")) {
	include_once "components/{$ar[1]}/{$ar[2]}.php";
	$content = fetch("{$ar[1]}/{$ar[2]}.html");
} else {
	include_once 'components/error/404.php';
	$content = fetch("error/404.html");
}

/*
 * common pattern. way to set title,layout or import js/css files in component action.
 * see detail in libs/front.php
 * e.g.
 * 	  Front::set_layout('no_header.php');
 * 	  Front::set_title('Do not panic！！！');
 * 	  Front::append_js('jquery.color.js');
 *
 */
assign('frontTitle', Front::get_title());
assign('frontContent', $content);

assign('frontJsQueue', Front::get_js_queue());
assign('frontCssQueue', Front::get_css_queue());

display( Front::get_layout() );

