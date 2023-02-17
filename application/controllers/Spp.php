<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model("Model_spp");
    }
    public function tambah_spp(){
        $tahun       = $this->input->post("tahun");
        $nominal     = $this->input->post("nominal");

        $data       = array("tahun" => $tahun,
                            "nominal" => $nominal);

        $insert     = $this->Model_spp->insert_data($data);
        if($insert)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di tambah"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di tambah"));
    }
    function hapus_spp(){
        $id     = $this->input->post('id');
        $where  = array("id_spp" => $id);
        $delete = $this->Model_spp->delete_data($where);
        if($delete)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di hapus"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di hapus"));
    }
    function data_spp(){
        $data['data']   = array();
        $data_spp     =$this->Model_spp->data_spp();
        foreach($data_spp->result() as $spp):
            
            array_push($data['data'],array(
                $spp->id_spp,
                $spp->tahun,
                $spp->nominal,
                "<a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$spp->id_spp\")'><i class='fas fa-trash'></i> Hapus</a>"
            ));
        endforeach;
        
        echo json_encode($data);
    }
}
