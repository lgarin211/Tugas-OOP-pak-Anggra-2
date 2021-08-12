<?php

class config{
 
    // Property
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "db_spp";
    var $connection;

    // Method koneksi kedalam database
	function Connect(){
		$this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        return $this->connection;
	}
 
}
