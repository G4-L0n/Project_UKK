<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
    public function tambah_kelas(){
        $nama       = $this->input->post("nama");
        $jurusan    = $this->input->post("jurusan");
        $jumlah     = $this->input->post("jumlah");

        echo json_encode(array("ressult" => "Done"));
    }
}
?>