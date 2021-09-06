<?php 

//class CRUD petugas
class controller_petugas{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mpetugas;

	var $id_petugas;
	var $username;
	var $password;
	var $nama_petugas;
	var $level;



	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_petugas.php';
			$this->Mpetugas = new model_petugas();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_petugas,$username,$password,$nama_petugas,$level)
		{
			//perintah POST data
			$this->Mpetugas->POST($id_petugas,$username,$password,$nama_petugas,$level);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mpetugas->GET();
		}



		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($petugas)
		{
			//perintah get data where
			return $this->Mpetugas->GET_Where($petugas);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_petugas,$username,$password,$nama_petugas,$level)
		{
			//perintah PUT data
			$this->Mpetugas->PUT($id_petugas,$username,$password,$nama_petugas,$level);
		}



		//method menghapus data dari table
		function DELETEData($id_petugas)
		{
			//perintah delete data
			$this->Mpetugas->DELETE($id_petugas);
		}

		
}

 ?>