<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model("Model_petugas");
    }
    public function tambah_petugas(){
        $username           = $this->input->post("username");
        $password           = $this->input->post("password");
        $nama_petugas       = $this->input->post("nama_petugas");
        $level              = $this->input->post("level");

        $data       = array("username"      => $username,
                            "password"      => $password,
                            "nama_petugas"  => $nama_petugas,
                            "level"         => $level);

        $insert     = $this->Model_petugas->insert_data($data);
        if($insert)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di tambah"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di tambah"));
    }
    function hapus_petugas(){
        $id     = $this->input->post('id');
        $where  = array("id_petugas" => $id);
        $delete = $this->Model_petugas->delete_data($where);
        if($delete)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di hapus"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di hapus"));
    }
    function data_petugas(){
        $data['data']   = array();
        $data_petugas     =$this->Model_petugas->data_petugas();
        foreach($data_petugas->result() as $petugas):
            
            array_push($data['data'],array(
                $petugas->id_petugas,
                $petugas->username,
                $petugas->password,
                $petugas->nama_petugas,
                $petugas->level,
                "<a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$petugas->id_petugas\")'><i class='fas fa-trash'></i> Hapus</a>"
            ));
        endforeach;
        
        echo json_encode($data);
    }
}
