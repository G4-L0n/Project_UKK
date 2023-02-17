<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model("Model_kelas");
    }
    public function tambah_kelas(){
        $nama       = $this->input->post("nama");
        $jurusan    = $this->input->post("jurusan");

        $data       = array("nama_kelas" => $nama,
                            "kompentensi_keahlian" => $jurusan);

        $insert     = $this->Model_kelas->insert_data($data);
        if($insert)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di tambah"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di tambah"));
    }
    function hapus_kelas(){
        $id     = $this->input->post('id');
        $where  = array("id_kelas" => $id);
        $delete = $this->Model_kelas->delete_data($where);
        if($delete)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di hapus"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di hapus"));
    }
    function data_kelas(){
        $data['data']   = array();
        $data_kelas     =$this->Model_kelas->data_kelas();
        foreach($data_kelas->result() as $kelas):
            
            array_push($data['data'],array(
                $kelas->id_kelas,
                $kelas->nama_kelas,
                $kelas->kompentensi_keahlian,
                "<a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$kelas->id_kelas\")'><i class='fas fa-trash'></i> Hapus</a>"
            ));
        endforeach;
        
        echo json_encode($data);
    }
}
