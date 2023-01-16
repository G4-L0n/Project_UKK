<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("model_kelas");
    }
    public function tambah_kelas(){
        $nama       = $this->input->post("nama");
        $jurusan    = $this->input->post("jurusan");
        $jumlah     = $this->input->post("jumlah");

        echo json_encode(array("nama" => $nama, "jurusan" => $jurusan, "jumlah" => $jumlah));
    }
    function data_kelas(){
        $data['data']   = array();
        $data_kelas     =$this->model_kelas->data_kelas();
        foreach($data_kelas->result() as $kelas):

        endforeach;
    }
}
?>