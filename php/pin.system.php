<?php
// include_once("database.connection.php");

/**
* 
*/
class NotedDashboard {

	private $dB;

	public function __construct(mysqli $dB){
		$this->conn = $dB;
	}

	function createPin() {
		return false;
	}

	function deletePin($delParam) {
		return false; 
	}

	function setID($table){
		$sql = 'SELECT * FROM '.$table;
		if ($id = $this->conn->query($sql)){
			$id = $id->num_rows + 1; 
		}
		return $id; 
	}

	function listPins() {
		return false; 
	}

	function createTag() {
		return false;
	}

	function deleteTag() {
		return false; 
	}

}