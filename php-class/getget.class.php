<?php

class GetGet() {
	$text;
	$timestamp;
	
	public function setText() {
		$this->text = $_GET["i"];
	}
	
	/** will check if GET is numeric */
	public function getText() {
		$this->setTimestamp();
		return $this->text;
	}
	
	private function isGet() {
		if(empty($this->text)) {
			return false;
		} elseif(!is_numeric($this->text)) {
			return false;
		} else {
			return true;
		}
	}
	
	private function setTimestamp() {
		$date = new DateTime();
		
		$this->timestamp = date_format($date, 'U = YmdHis');
	}
	
	public function getTimestamp() {
		return $this->timestamp;
	}
}
