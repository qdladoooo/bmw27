<?php
class User extends db
{
	function user_info() {
		$sql = 'show databases;';
		return $this->Eq($sql);
	}
	
}

