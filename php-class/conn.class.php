<?php
class DBconn() {
	private $conn;
	
	protected $HOSTIP = "";
	protected $USER = "";
	protected $PASS = "";
	protected $DATABASE = "";
				
	public function __construct() {
		
	}
	
	public function conn() {
		$this->conn = new mysqli(
			$this->HOSTIP,
			$this->USER,
			$this->PASS,
			$this->DATABASE
		);
	}
	
	public function close() {
		$this->conn->close();
	}
	
	public function putData($date, $data) {
		$this->conn->query(
			'INSERT INTO `chick_small` '.
			'(`date`, `code`) '.
			'VALUES (`'.$date.'`, `'.$data.'`);'
		);
		
	}
}