 <?php 

//class model siswa (CRUD siswa)
class Model_siswa{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $nisn;
	var $nis;
	var $nama;
	var $id_kelas;
	var $alamat;
	var $no_telp;
	var $id_spp;



	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
		{
			
			mysqli_query($this->con,"insert into siswa values(
				'".$nisn."',
				'".$nis."',
				'".$nama."',
				'".$id_kelas."',
				'".$alamat."',
				'".$no_telp."',
				'".$id_spp."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select siswa.*, kelas.nama_kelas,  spp.nominal from siswa join kelas on siswa.id_kelas = kelas.id_kelas join spp on siswa.id_spp = spp.id_spp");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		function GETKelas()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select * from kelas");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($nisn)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select siswa.*, kelas.nama_kelas,  spp.nominal from siswa join kelas on siswa.id_kelas = kelas.id_kelas join spp on siswa.id_spp = spp.id_spp where nisn='$nisn'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp)
		{
			//perintah PUT data
			mysqli_query($this->con,"update siswa set
				nis='".$nis."',
				nama='".$nama."',
				id_kelas='".$id_kelas."',
				alamat='".$alamat."',
				no_telp='".$no_telp."',
				id_spp='".$id_spp."'
				where nisn='".$nisn."'
				");
		}



		//method menghapus data dari table
		function DELETE ($nisn)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from siswa where nisn='$nisn'");
		}

}




 ?> 