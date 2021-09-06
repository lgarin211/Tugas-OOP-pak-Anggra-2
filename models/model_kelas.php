<?php 

//class model kelas (CRUD kelas)
class Model_kelas{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_kelas;
	var $nama_kelas;
	var $kompetensi_keahlian;



	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_kelas,$nama_kelas,$kompetensi_keahlian)
		{
			
			mysqli_query($this->con,"insert into kelas values(
				'".$id_kelas."',
				'".$nama_kelas."',
				'".$kompetensi_keahlian."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from kelas");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_kelas)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select * from kelas where id_kelas='$id_kelas'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_kelas,$nama_kelas,$kompetensi_keahlian)
		{
			//perintah PUT data
			mysqli_query($this->con,"update kelas set
				id_kelas='".$id_kelas."',
				nama_kelas='".$nama_kelas."',
				kompetensi_keahlian='".$kompetensi_keahlian."'
				where id_kelas='".$id_kelas."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_kelas)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from kelas where id_kelas='$id_kelas'");
		}

}




 ?>