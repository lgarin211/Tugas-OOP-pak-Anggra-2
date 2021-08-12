<?php

// Class siswa (CRUD kelas)
class Model_kelas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $id_kelas;
     var $nama_kelas;
     var $kompetensi_keahlian;

     

     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($id_kelas, $nama_kelas, $kompetensi_keahlian){

        mysqli_query($this->con,"insert into kelas values(
            '".$id_kelas."',
            '".$nama_kelas."',
            '".$kompetensi_keahlian."'
            )");

    }



    
    // Method untuk mengambil semua data dari table
    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from kelas");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi dari table
    function GET_Where ($id_kelas){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from kelas where id_kelas='$id_kelas'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }




    // Method untuk memasukan data ke dalam table
    function PUT ($id_kelas, $nama_kelas, $kompetensi_keahlian){

        // perintah PUT data
        mysqli_query($this->con,"update kelas set
            nama_kelas='".$nama_kelas."',
            kompetensi_keahlian='".$kompetensi_keahlian."'
            where id_kelas='".$id_kelas."'
            ");

    }




    // Method untuk menghapus data dari table
    function DELETE ($id_kelas){

        // perintah DELETE data
        mysqli_query($this->con,"delete from kelas where id_kelas='$id_kelas'");

    }


 


}


?>