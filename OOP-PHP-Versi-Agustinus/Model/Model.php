<?php


// Class database (koneksi database)
class Model
{

    // Method main variabel
    function __construct()
    {
        // Membuat Object dari Class database
        include 'Config/config.php';
        $this->db = new config();
        $this->con = $this->db->Connect();
    }
    // Model untuk memanggil seluruh isi data pada table
    public function Read()
    {
        $data = mysqli_query($this->con, 'SELECT * FROM ' . $_GET['t']);
        return $data;
    }
    // Model untuk mengisi data
    public function add()
    {
        if (!empty($_POST)) {
            $tag = '';
            $ze = array_key_first($_POST);
            $last = array_key_last($_POST);
            foreach ($_POST as $key => $value) {
                if ($key == $ze) {
                    $tag = $tag . "NULL,";
                } elseif ($key == $last) {
                    $tag = $tag . "'$value'";
                } else {
                    $tag = $tag . "'$value',";
                }
            }
            $query = "INSERT INTO " . $_GET['t'] . " VALUES (" . $tag . ")";
            var_dump($query);
            $data = mysqli_query($this->con, $query);
            $_GET['m'] = 'read';
            return $data;
        } else {
            $data = mysqli_query($this->con, 'SELECT * FROM ' . $_GET['t']);
        }
        return $data;
    }
    // Model untuk memanggil data spesifik
    public function by1()
    {
        $query = 'SELECT * FROM ' . $_GET['t'] . ' WHERE ' . $_GET['nas'] . '=' . $_GET['id'];
        $data = mysqli_query($this->con, $query);
        return $data;
    }
    // Model untuk update data
    public function up1()
    {
        $tag = '';
        $ze = array_key_first($_POST);
        $last = array_key_last($_POST);
        foreach ($_POST as $key => $value) {
            if ($key == $last) {
                $tag = $tag . "$key = '$value'";
            } else {
                $tag = $tag . "$key = '$value',";
            }
        }
        $kondisi = "WHERE $ze = '$_POST[$ze]'";
        $query = 'UPDATE ' . $_GET['t'] . ' SET ' . $tag . $kondisi;
        $data = mysqli_query($this->con, $query);
        var_dump($data);
        $_GET['m'] = 'read';
        return $data;
    }
}
