<?php

// Class pegawai (CRUD pegawai)
class Controller_Petugas{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;
     var $Modelcall;
     
     var $id_petugas ;
     var $username;
     var $password;
     var $nama_petugas;
     var $level;

     

     // Method main variabel
        function __construct()
        {
            // Membuat Object dari Class Module pegawai
            include '../Models/Model_pegawai.php';
            $this->Modelcall = new Model_pegawai();
        }

    //CREATE
        // Method untuk memasukan data ke dalam table
    function POSTData ($id_petugas ,$username,$password,$nama_petugas,$level){
        // perintah POST data
        $this->Modelcall->POST($id_petugas ,$username,$password,$nama_petugas,$level);

    }
    
    //READ
        // Method untuk mengambil semua data dari table
    function GetData_All(){
        // perintah GET data
        return $this->Modelcall->GET();
    }
    // Method untuk mengambil data seleksi dari table
    function GetData_Where ($id_petugas ){
        // perintah GET data
        return $this->Modelcall->GET_Where($id_petugas);
    }



    //Update
    // Method untuk memasukan data ke dalam table
    function PUTData ($id_petugas ,$username,$password,$nama_petugas,$level){
        // perintah PUT data
        $this->Modelcall->PUT($id_petugas ,$username,$password,$nama_petugas,$level);
    }



    //Delete
        // Method untuk menghapus data dari table
    function DELETEData ($id_petugas ){
        // perintah DELETE data
        $this->Modelcall->DELETE($id_petugas );
    }

}
