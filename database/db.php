<?php 

class DB {

	function __construct() {
		
		$this->host = 'localhost';
		$this->db_name = 'ravkagramm';
		$this->user = 'mysql';
		$this->password = 'mysql';

		$this->connect = mysqli_connect(
			$this->host,
			$this->user,
			$this->password,
			$this->db_name
		) or die(mysqli_error($this->connect));

	}

}