<?php 

//class CRUD pembayaran
class controller_pembayaran{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $Mpembayaran;

	var $id_pembayaran;
	var $id_petugas;
	var $nisn;
	var $tgl_bayar;
	var $bulan_bayar;
	var $tahun_bayar;
	var $id_spp;
	var $jumlah_bayar;



	//method main variabel
		function __construct()
		{
			// membuat objek dari class module pegawai
			include '../models/model_pembayaran.php';
			$this->Mpembayaran = new model_pembayaran();
		}



		//method memasukan data ke dalam tabel
		function POSTData ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar)
		{
			//perintah POST data
			$this->Mpembayaran->POST($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar);
		}



		//method untuk mengambil semua data dari table
		function GetData_All()
		{
			//perintah GET data
			return $this->Mpembayaran->GET();
		}



		//method untuk mengambil data seleksi dari tabel
		function GetData_Where($id_pembayaran)
		{
			//perintah get data where
			return $this->Mpembayaran->GET_Where($id_pembayaran);
		}



		//method memasukan data ke dalam tabel
		function PUTData($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar)
		{
			//perintah PUT data
			$this->Mpembayaran->PUT($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_bayar,$tahun_bayar,$id_spp,$jumlah_bayar);
		}



		//method menghapus data dari table
		function DELETEData($id_pembayaran)
		{
			//perintah delete data
			$this->Mpembayaran->DELETE($id_pembayaran);
		}

		
}

 ?>