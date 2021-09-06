<?php 

//class CRUD kelas
class controller_kelas{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mkelas;

	var $id_kelas;
	var $nama_kelas;
	var $kompetensi_keahlian;



	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_kelas.php';
			$this->Mkelas = new model_kelas();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_kelas,$nama_kelas,$kompetensi_keahlian)
		{
			//perintah POST data
			$this->Mkelas->POST($id_kelas,$nama_kelas,$kompetensi_keahlian);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mkelas->GET();
		}



		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($id_kelas)
		{
			//perintah get data where
			return $this->Mkelas->GET_Where($id_kelas);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_kelas,$nama_kelas,$kompetensi_keahlian)
		{
			//perintah PUT data
			$this->Mkelas->PUT($id_kelas,$nama_kelas,$kompetensi_keahlian);
		}



		//method menghapus data dari table
		function DELETEData($id_kelas)
		{
			//perintah delete data
			$this->Mkelas->DELETE($id_kelas);
		}

		
}

 ?>