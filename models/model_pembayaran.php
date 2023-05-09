 <?php 

//class model pembayaran (CRUD pembayaran)
class Model_pembayaran{

	//property
	var $db;
	var $con;
	var $query;
	var $data; 
	var $result;

	var $id_pembayaran;
	var $id_petugas;
	var $nisn;
	var $tgl_bayar;
	var $bulan_dibayar;
	var $tahun_dibayar;
	var $id_spp;
	var $jumlah_bayar;



	//method main variabel
		function __construct()
		{
			//membuat objek dari kelas database
			include '../config/database.php';
			$this->db = new database();
			$this->con = $this->db->connect();
		}



		//method memasukan data ke dalam table
		function POST ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp, $jumlah_bayar)
		{
			
			mysqli_query($this->con,"insert into pembayaran values(
				'".$id_pembayaran."',
				'".$id_petugas."',
				'".$nisn."',
				'".$tgl_bayar."',
				'".$bulan_dibayar."',
				'".$tahun_dibayar."',
				'".$id_spp."',
				'".$jumlah_bayar."'
				)");
		}



		//method mengambil semua data dari tabel
		function GET()
		{
			//perintah Get data
			$this->query=mysqli_query($this->con,"select pembayaran.*, petugas.nama_petugas, spp.nominal from pembayaran join petugas on pembayaran.id_petugas = petugas.id_petugas join spp on pembayaran.id_spp = spp.id_spp");
			while ($this->data=mysqli_fetch_array($this->query)) {
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method untuk mengambil data seleksi dari tabel
		function GET_Where($id_pembayaran)
		{
			//perintah get where data
			$this->query=mysqli_query($this->con,"select pembayaran.*, petugas.nama_petugas, spp.nominal from pembayaran join petugas on pembayaran.id_petugas = petugas.id_petugas join spp on pembayaran.id_spp = spp.id_spp where id_pembayaran='$id_pembayaran'");
			while($this->data=mysqli_fetch_array($this->query))
			{
				$this->result[]=$this->data;
			}
			return $this->result;
		}



		//method memasukan data kedalam tabel
		function PUT ($id_pembayaran,$id_petugas,$nisn,$tgl_bayar,$bulan_dibayar,$tahun_dibayar,$id_spp, $jumlah_bayar)
		{
			//perintah PUT data
			mysqli_query($this->con,"update pembayaran set
				id_pembayaran='".$id_pembayaran."',
				id_petugas='".$id_petugas."',
				nisn='".$nisn."',
				tgl_bayar='".$tgl_bayar."',
				bulan_dibayar='".$bulan_dibayar."',
				tahun_dibayar='".$tahun_dibayar."',
				id_spp='".$id_spp."',
				jumlah_bayar='".$jumlah_bayar."'
				where id_pembayaran='".$id_pembayaran."'
				");
		}



		//method menghapus data dari table
		function DELETE ($id_pembayaran)
		{
			//perintah DELETE data
			mysqli_query($this->con,"delete from pembayaran where id_pembayaran='$id_pembayaran'");
		}

}




 ?> 