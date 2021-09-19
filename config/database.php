<?php

//koneksi ke database
class database
{

    //property untuk dijadikan objek
    public $host = "db4free.net";
    public $uname = "siswasiswirk4";
    public $pass = "akubisacoding";
    public $db = "pbo_pak_anggra_4";
    public $connection;

    //method koneksi ke database
    public function connect()
    {
        $this->connection = mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
        return $this->connection;
    }
}
