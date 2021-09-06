<?php 

//class model spp (CRUD spp)
class Model_spp{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_spp;
	var $tahun;
	var $nominal;



	//method main variabel
		function __construct()
		{
			//membuat objek dari spp database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_spp,$tahun,$nominal)
		{
			
			mysqli_query($this->con,"insert into spp values(
				'".$id_spp."',
				'".$tahun."',
				'".$nominal."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from spp");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_spp)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select * from spp where id_spp='$id_spp'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_spp,$tahun,$nominal)
		{
			//perintah PUT data
			mysqli_query($this->con,"update spp set
				id_spp='".$id_spp."',
				tahun='".$tahun."',
				nominal='".$nominal."'
				where id_spp='".$id_spp."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_spp)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from spp where id_spp='$id_spp'");
		}

}




 ?>