<?php 

//koneksi ke database
class database
{

	//property untuk dijadikan objek
	var $host = "db4free.net";
	var $uname = "siswasiswirk4";
	var $pass = "akubisacoding";
	var $db = "pbo_pak_anggra_4";
	var $connection;
	
	//method koneksi ke database
	function connect()
	{
		$this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
		return $this->connection;
	}
}

 ?>
