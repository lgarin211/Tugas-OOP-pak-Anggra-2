<?php

// Class database (koneksi database)
class C1
{

    // Property

    public function ren($file, $data = "")
    {
        require "View/" . $file . ".php";
    }
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
            $data['q']=$model->$m();
            $data['p']=null;
            if (!empty($data)) {
                foreach ($data['q'] as $key => $value) {
                    foreach ($value as $key2 => $ban) {
                        $data['p'][$key2] = $key2;
                    }
                }
            // var_dump($data);die;
                $this->ren($_GET['v'], $data);
            }
        }
    }

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
            // var_dump($data);
            // $this->ren($_GET['v'],$data);
            // return $data;
        }
    }
    public function ben()
    {
        if (!empty($_POST)) {
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
            // var_dump($data);
            $this->ren($_GET['v'], $data);
            // return $data;
        }
    }
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
            // var_dump($data);
            $this->ren($_GET['v'], $data);
            // return $data;
        }
    }
}
