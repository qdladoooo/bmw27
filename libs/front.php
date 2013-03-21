<?php

//front-end setting
class Front {
	static private $layout_path_base = 'layout/';
	static $default_layout = 'layout.html';
	
	static private $title_postfix = 'BMW';
	static $default_title = '';
	
	//layout
	static function set_layout($template_name) {
		self::$default_layout = $template_name;
	}
	
	static function no_layout() {
		self::$default_layout = 'no_layout.html';
	}

	static function get_layout() {
		return self::$layout_path_base . self::$default_layout;
	}
	
	//title
	static function set_title($title, $need_postfix = true) {
		if(!empty($title) && $need_postfix) {
			self::$default_title = $title . ' - ' . self::$title_postfix;
		} else {
			self::$default_title = $title . ($need_postfix ? self::$title_postfix : '');
		}
	}
	
	static function get_title() {
		return self::$default_title;
	}
	
	//js
	
	
	//css
	
	
}
