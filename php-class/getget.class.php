<?php

class GetGet {
	private $text;
	private $timestamp;
	
	public function setText() {
		$this->setTimestamp();
		$this->text = $_GET["i"];
	}
	
	/** will check if GET is numeric */
	public function isGet() {
		if(empty($this->text)) {
			return false;
		} elseif(!is_numeric($this->text)) {
			return false;
		} else {
			return true;
		}
	}
	
	public function getText() {
		return $this->text;
	}
	
	private function setTimestamp() {		
		$this->timestamp = time();
	}
	
	public function getTimestamp() {
		return $this->timestamp;
	}
}
