 <?php 

//class model petugas (CRUD petugas)
class Model_petugas{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_kelas;
	var $username;
	var $password;
	var $nama_petugas;
	var $level;


	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_petugas,$username,$password,$nama_petugas,$level)
		{
			
			mysqli_query($this->con,"insert into petugas values(
				'".$id_petugas."',
				'".$username."',
				'".$password."',
				'".$nama_petugas."',
				'".$level."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from petugas");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_petugas)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select * from petugas where id_petugas='$id_petugas'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_petugas,$username,$password,$nama_petugas,$level)
		{
			//perintah PUT data
			mysqli_query($this->con,"update petugas set
				id_petugas='".$id_petugas."',
				username='".$username."',
				password='".$password."',
				nama_petugas='".$nama_petugas."',
				level='".$level."'
				where id_petugas='".$id_petugas."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_petugas)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from petugas where id_petugas='$id_petugas'");
		}

}




 ?> 