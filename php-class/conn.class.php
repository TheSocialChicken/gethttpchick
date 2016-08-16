<?php
class DBconn {
	private $conn;
	
	protected $HOSTIP;
	protected $USER;
	protected $PASS;
	protected $DATABASE;
	protected $TABLE;
				
	public function __construct() {
		if(!isset($this->HOSTIP)) {
			$this->HOSTIP = '';
			$this->USER = '';
			$this->PASS = '';
			$this->DATABASE = '';
			$this->TABLE = '';
		}
	}
	
	public function conn() {
		
		$this->conn = new mysqli(
			$this->HOSTIP,
			$this->USER,
			$this->PASS,
			$this->DATABASE
		);
		
		if (!$this->conn) {
		    echo "Error: Unable to connect to MySQL." . PHP_EOL;
		    echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
		    echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
		    exit;
		}
	}
	
	public function close() {
		$this->conn->close();
	}
	
	public function putData($date, $data) {
		$sql = 'INSERT INTO `'.$this->TABLE.'` '.
			'(`date`, `code`) '.
			'VALUES ('.$date.', '.$data.');';
		
		$this->conn->query($sql);
		//echo $sql;
	}
}
?>