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
    // Property
    public function Read()
    {
        $data = mysqli_query($this->con, 'SELECT * FROM ' . $_GET['t']);
        // var_dump($data);die;
        return $data;
    }
    public function add()
    {
        if (!empty($_POST)) {
            $tag = '';
            $ze = array_key_first($_POST);
            $last = array_key_last($_POST);
            foreach ($_POST as $key => $value) {
                if ($key==$ze) {
                    $tag=$tag."NULL,";
                }
                elseif($key == $last) {
                    $tag = $tag . "'$value'";
                } else {
                    $tag = $tag . "'$value',";
                }
            }
            // var_dump($tag);die;
            $query="INSERT INTO " . $_GET['t'] . " VALUES (" . $tag . ")";
            var_dump($query);
            $data = mysqli_query($this->con, $query);
            // var_dump($data);die;
            $_GET['m'] = 'read';
            return $data;

        } else {
            $data = mysqli_query($this->con, 'SELECT * FROM ' . $_GET['t']);
        }
        // var_dump($data);die;
        return $data;
    }
    public function by1()
    {
        $query = 'SELECT * FROM ' . $_GET['t'] . ' WHERE ' . $_GET['nas'] . '=' . $_GET['id'];
        $data = mysqli_query($this->con, $query);
        // var_dump($data);die;
        return $data;
    }
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
        // var_dump($query);die;
        $data = mysqli_query($this->con, $query);
        var_dump($data);
        $_GET['m'] = 'read';
        return $data;
    }
}
