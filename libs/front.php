<?php

//front-end setting
class Front {
	static private $layout_path_base = 'layout/';
	static $default_layout = 'layout.html';
	
	static private $title_postfix = 'BMW';
	static $default_title = 'page';
	
	static private $css_queue = array();
	static private $js_queue = array();
	
	/*
	 * 	layout
	 * 
	 */
	static function set_layout($template_name) {
		self::$default_layout = $template_name;
	}
	
	//disable layout
	static function no_layout() {
		self::$default_layout = 'no_layout.html';
	}

	//get current
	static function get_layout() {
		return self::$layout_path_base . self::$default_layout;
	}
	
	/*
	 * title
	 * 
	 * */
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
	
	/*
	 * js
	 * 
	 * */
	static function append_js($js_path) {
		array_push(self::$js_queue, __JS_PATH . $js_path);
	}
	
	static function prepend_js($js_path) {
		array_unshift(self::$js_queue, __JS_PATH . $js_path);
	}
	
	static function call_js($remote_path) {
		array_push(self::$js_queue, $remote_path);
	}
	
	static function get_js_queue() {
		return self::$js_queue;
	}
	
	/*
	 * css
	 * 
	 * */
	static function append_css($css_path) {
		array_push(self::$css_queue, __CSS_PATH . $css_path);
	}
	
	static function call_css($remote_path) {
		array_push(self::$css_queue, $remote_path);
	}
	
	static function get_css_queue() {
		return self::$css_queue;
	}
	
}
