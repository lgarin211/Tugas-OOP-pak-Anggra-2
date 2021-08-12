<?php

// Class spp (CRUD spp)
class Model_spp{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

     var $id_spp;
     var $tahun;
     var $nominal;

     

     // Method main variabel
        function __construct()
        {
        // Membuat Object dari Class database
        include '../Config/Database.php';
        $this->db = new Database();
        $this->con=$this->db->Connect();
        }




    // Method untuk memasukan data ke dalam table
    function POST ($id_spp, $tahun, $nominal){

        mysqli_query($this->con,"insert into spp values(
            '".$id_spp."',
            '".$tahun."',
            '".$nominal."'
            )");

    }



    
    // Method untuk mengambil semua data dari table
    function GET(){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from spp");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }


    // Method untuk mengambil data seleksi dari table
    function GET_Where ($id_spp){

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from spp where id_spp='$id_spp'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }




    // Method untuk memasukan data ke dalam table
    function PUT ($id_spp, $tahun, $nominal){

        // perintah PUT data
        mysqli_query($this->con,"update spp set
            tahun='".$tahun."',
            nominal='".$nominal."'
            where id_spp='".$id_spp."'
            ");

    }




    // Method untuk menghapus data dari table
    function DELETE ($id_spp){

        // perintah DELETE data
        mysqli_query($this->con,"delete from spp where id_spp='$id_spp'");

    }


 


}


?>