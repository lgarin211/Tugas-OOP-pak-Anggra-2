<?php 

//class CRUD siswa
class controller_siswa{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Msiswa;

	var $nisn;
	var $nama;
	var $id_kelas;
	

	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_siswa.php';
			$this->Msiswa = new model_siswa();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
		{
			//perintah POST data
			$this->Msiswa->POST($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Msiswa->GET();
		}


		function GetData_Kelas()
		{
			return $this->Msiswa->GETKelas();
		}

		

		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($nisn)
		{
			//perintah get data where
			return $this->Msiswa->GET_Where($nisn);
		}



		//method memasukan data ke dalam tabel
		function PUTData($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
		{
			//perintah PUT data
			$this->Msiswa->PUT($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);
		}



		//method menghapus data dari table
		function DELETEData($nisn)
		{
			//perintah delete data
			$this->Msiswa->DELETE($nisn);
		}

		
}

 ?>