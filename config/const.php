<?php
define('__IS_DEVELOPING', true);

//domain for cookie, eg. 'bmw.cn'
$domain = $_SERVER['HTTP_HOST'];
define('__DOMAIN', $domain);

//statics url, eg. 'http://bmw.cn'
define('__WEB_URL','http://' . $domain);
define('__JS_PATH', __WEB_URL . '/statics/j/');
define('__CSS_PATH', __WEB_URL . '/statics/c/');
define('__IMG_PATH', __WEB_URL . '/statics/i/');

//mysql connect params
define('__DATABASE_CONNECT_STRING', 'mysql:host=127.0.0.1;');
define('__DATABASE_CONNECT_NAME', 'root');
define('__DATABASE_CONNECT_PW', '5533');
define('__DATABASE_NAME', 'mainsite');

//des key
define('__DES_KEY_STRING',"fg!@ym89%");

