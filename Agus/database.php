<?php

// Class database (koneksi database)
class database{
 
    // Property
	var $host = "localhost";
	var $uname = "root";
	var $pass = "";
	var $db = "datapas";
    var $connection;

    // Method 
	function Connect(){
		$this->connection=mysqli_connect($this->host, $this->uname, $this->pass,$this->db);
        return $this->connection;
	}
 
} 


?>