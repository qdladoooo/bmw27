<?php

class Utils 
{
	//简单filter
	static function sample_filter($str) {
		$str = htmlspecialchars($str);
		$str = addslashes($str);
		
		return $str;
	}
	
	
	
}