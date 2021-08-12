<?php

// Class siswa (CRUD siswa)
class Controller_siswa{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $MSiswa;

     var $nisn;
     var $nis;
     var $nama;
     var $id_kelas;
     var $alamat;
     var $id_spp;

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module siswa
            include '../Models/Model_siswa.php';
            $this->MSiswa = new Model_siswa();
        }

    

    // Method untuk memasukan data ke dalam table
    function POSTData ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // perintah POST data
        $this->MSiswa->POST($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);

    }



    
    // Method untuk mengambil semua data dari table
    function GetData_All(){

        // perintah GET data
        // return $this->MSiswa->GET();
        return $this->MSiswa->getData();
    }
   
    function GetData_Kelas(){

        // perintah GET data
        // return $this->MSiswa->GET();

        return $this->MSiswa->GETKelas();
    }

    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($nisn){

        // perintah GET data
        return $this->MSiswa->GET_Where($nisn);
    }



    // Method untuk memasukan data ke dalam table
    function PUTData ($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp){

        // perintah PUT data
        $this->MSiswa->PUT($nisn,$nis,$nama,$id_kelas,$alamat,$no_telp,$id_spp);

    }




    // Method untuk menghapus data dari table
    function DELETEData ($nisn){

        // perintah DELETE data
        $this->MSiswa->DELETE($nisn);

    }


 


}


?>