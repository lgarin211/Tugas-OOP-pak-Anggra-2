<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pbo_pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
    
     // Method untuk mengambil semua data dari table Jenis L
     function GetData_All_L (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from general where jns_kel='L'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
       // Method untuk mengambil semua data dari table Jenis L
       function GetData_All_SM (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from general where status='M'");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }
           // Method untuk mengambil semua data dari table Jenis L
           function GetData_All_BM (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"select * from general where status='L'");
            while($this->data=mysqli_fetch_array($this->query)){
                $this->result[]=$this->data;
            }
            return $this->result;
        }
            // Method untuk mengambil semua data dari table Jenis L
            function GetData_All_DP1 (){

                // Membuat Object dari Class database
                include 'database.php';
                $this->db = new database();
                $this->con=$this->db->Connect();
        
                // perintah Get data
                $this->query=mysqli_query($this->con,"SELECT * FROM general WHERE YEAR(CURDATE()) - YEAR(tgl_lahir) BETWEEN 20 and 30");
                while($this->data=mysqli_fetch_array($this->query)){
                    $this->result[]=$this->data;
                }
                return $this->result;
            }
         // Method untuk mengambil semua data dari table Jenis L
         function GetData_All_DP2 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(tgl_lahir) AS age FROM general");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['age']>=30)&&($this->data['age']<=45)) {
                    $this->result[]=$this->data;
                }
            }
            return $this->result;
        }
        function GetData_All_DM1 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM general");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['age']>=1)&&($this->data['age']<=5)) {
                    $this->result[]=$this->data;
                }
            }
            return $this->result;
        }
        function GetData_All_DM2 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM general");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['age']>=6)&&($this->data['age']<=10)) {
                    $this->result[]=$this->data;
                }
            }
            return $this->result;
        }
        function GetData_All_DM3 (){

            // Membuat Object dari Class database
            include 'database.php';
            $this->db = new database();
            $this->con=$this->db->Connect();
    
            // perintah Get data
            $this->query=mysqli_query($this->con,"SELECT *, YEAR(CURDATE()) - YEAR(mulai_kerja) AS age FROM general");
            while($this->data=mysqli_fetch_array($this->query)){
                if (($this->data['age']>=11)&&($this->data['age']<=25)) {
                    $this->result[]=$this->data;
                }
            }
            return $this->result;
        }

}
          

?>
