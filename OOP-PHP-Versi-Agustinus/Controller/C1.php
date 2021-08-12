<?php

// Class database (koneksi database)
class C1
{

    // Property

    public function ren($file, $data = "")
    {
        require "View/" . $file . ".php";
    }
    // method untuk add data
    public function add()
    {
        if (!empty($_POST)) {
            include('Model/Model.php');
            $m = $_GET['m'];
            $model = new Model();
            $model->$m();
            header("Location:?f=man&c=C1&t=" . $_GET['t'] . "&v=all&m=" . $_GET['m']);
        } else {
            include('Model/Model.php');
            $m = $_GET['m'];
            $model = new Model();
            $data['q'] = $model->$m();
            $data['p'] = null;
            if (!empty($data)) {
                foreach ($data['q'] as $key => $value) {
                    foreach ($value as $key2 => $ban) {
                        $data['p'][$key2] = $key2;
                    }
                }
                $this->ren($_GET['v'], $data);
            }
        }
    }
    // method untuk update data
    public function upt()
    {
        if (!empty($_GET['t'])) {
            include('Model/Model.php');
            $m = $_GET['m'];
            $model = new Model();
            $model->$m();
            // $data['p']=null;
            if (!empty($data)) {
                foreach ($data['q'] as $key => $value) {
                    foreach ($value as $key2 => $ban) {
                        $data['p'][$key2] = $key2;
                    }
                }
            }
        }
    }
    // method untuk update data
    public function ben()
    {
        if (!empty($_POST)) {
            // jika true maka akan memanggil method update data
            $_GET['m'] = 'up1';
            $this->upt();
            header("Location:?f=man&c=C1&t=" . $_GET['t'] . "&v=all&m=" . $_GET['m']);
            die;
        }
        if (!empty($_GET['t'])) {
            include('Model/Model.php');
            $m = $_GET['m'];
            $model = new Model();
            $data['q'] = $model->$m();
            $data['p'] = null;
            if (!empty($data)) {
                foreach ($data['q'] as $key => $value) {
                    foreach ($value as $key2 => $ban) {
                        $data['p'][$key2] = $key2;
                    }
                }
            }
            $this->ren($_GET['v'], $data);
        }
    }
    // method untuk melihat seluruh data
    public function man()
    {
        if (!empty($_GET['t'])) {
            include('Model/Model.php');
            $m = $_GET['m'];
            $model = new Model();
            $data['q'] = $model->$m();
            $data['p'] = null;
            if (!empty($data)) {
                foreach ($data['q'] as $key => $value) {
                    foreach ($value as $key2 => $ban) {
                        $data['p'][$key2] = $key2;
                    }
                }
            }
            $this->ren($_GET['v'], $data);
        }
    }
}
