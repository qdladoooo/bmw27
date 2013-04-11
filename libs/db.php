<?php
//common db op
class db {
	protected static $pdo;
	function __construct() {
		$this->GetInstance ();
	}
	
	function GetInstance() {
		if (self::$pdo == null) {
			self::$pdo = new PDO ( __DATABASE_CONNECT_STRING, __DATABASE_CONNECT_NAME, __DATABASE_CONNECT_PW );
			self::$pdo->exec ( 'SET NAMES UTF8' );
			// var_dump("once");
		}
		return self::$pdo;
	}
	
	//excute query
	function Eq($sql) {
		$res = self::$pdo->query ( $sql );
		$this->IsError ();
		$res->setFetchMode ( PDO::FETCH_ASSOC );
		return $res->fetchAll ();
	}
	
	//excute one row
	function Eor($sql) {
		$res = self::$pdo->query ( $sql );
		$this->IsError ();
		$res->setFetchMode ( PDO::FETCH_ASSOC );
		$data = $res->fetch ();
		return $data;
	}
	
	//excute col
	function Ec($sql) {
		$res = self::$pdo->query ( $sql );
		$this->IsError ();
		$res->setFetchMode ( PDO::FETCH_ASSOC );
		$data = $res->fetchAll ( PDO::FETCH_COLUMN, 0 );
		return $data;
	}
	
	//excute scalar
	function Es($sql) {
		$res = self::$pdo->query ( $sql );
		$this->IsError ();
		$res->setFetchMode ( PDO::FETCH_NUM );
		$data = $res->fetch ( PDO::FETCH_COLUMN );
		return $data;
	}
	
	//excute none query
	function Enq($sql) {
		$res = self::$pdo->exec ( $sql );
		$this->IsError ();
		
		return $res;
	}
	
	//todo:finish when necessary
	function ExecuteNoneQueryWithPrepare($sql) {
	}
	
	//for dump
	function IsError() {
		if(__IS_DEVELOPING) {
			$errorCode = self::$pdo->errorCode ();
			if ($errorCode != '00000') {
				var_dump ( self::$pdo->errorInfo () );
				exit ();
			}
		}
	}
	
	function quote($var) {
		return self::$pdo->quote ( $var );
	}
}

