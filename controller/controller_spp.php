<?php 

//class CRUD spp
class controller_spp{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mspp;

	var $id_spp;
	var $tahun;
	var $nominal;



	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_spp.php';
			$this->Mspp = new model_spp();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_spp,$tahun,$nominal)
		{
			//perintah POST data
			$this->Mspp->POST($id_spp,$tahun,$nominal);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mspp->GET();
		}



		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($id_spp)
		{
			//perintah get data where
			return $this->Mspp->GET_Where($id_spp);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_spp,$tahun,$nominal)
		{
			//perintah PUT data
			$this->Mspp->PUT($id_spp,$tahun,$nominal);
		}



		//method menghapus data dari table
		function DELETEData($id_spp)
		{
			//perintah delete data
			$this->Mspp->DELETE($id_spp);
		}

		
}

 ?>