<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Spp extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_spp");
    }

    public function tambah_spp(){
        $tahun           = $this->input->post("tahun");
        $nominal         = $this->input->post("nominal");
        $status          = $this->input->post("status");

        if($status == "insert"){
            $data       = array("tahun"      => $tahun,
                                "nominal"      => $nominal);
                            
            $insert      =$this->Model_spp->insert_data($data);
            
            if($insert)
                echo json_encode(
                    array(
                        "icon"   => "success",
                        "judul"  => "Berhasil",
                        "isi"    => "Data berhasil ditambah")
                );
            
            else 
                echo json_encode(
                    array(
                        "icon"   => "error",
                        "judul"  => "error",
                        "isi"    => "Data gagal ditambah")
                );
                                    
        }else if($status == "update"){
            $id_spp    =$this->input->post("id");
            $data          = array("tahun"      => $tahun,
                                   "nominal"      => $nominal);
            $where         = array("id_spp"   => $id_spp);
            $update        =$this->Model_spp->update_data($data, $where);

            if($update)
                echo json_encode(
                    array(
                        "icon"   => "success",
                        "judul"  => "Berhasil",
                        "isi"    => "Data berhasil diubah")
                );
            
            else 
                echo json_encode(
                    array(
                        "icon"   => "error",
                        "judul"  => "error",
                        "isi"    => "Data gagal diubah")
                );
        }
    }

    function hapus_spp(){
        $id      = $this->input->post('id');
        $where   = array("id_spp" => $id);
        $delete  = $this->Model_spp->delete_data($where);
        if($delete)
            echo json_encode(
                array(
                    "icon"   => "success",
                    "judul"  => "Berhasil",
                    "isi"    => "Data berhasil dihapus")
            );
        
        else 
            echo json_encode(
                array(
                    "icon"   => "error",
                    "judul"  => "error",
                    "isi"    => "Data gagal dihapus")
            );

    }

    function data_spp(){
        $a = 1;
        $data['data'] = array();
        $data_spp   = $this->Model_spp->data_spp();
        foreach($data_spp->result() as $spp):
            array_push($data['data'], array(
                $a++,
                $spp->tahun,
                $spp->nominal,
                "
                <a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$spp->id_spp\")'><i class='fas fa-trash'></i>Hapus</a>
                <br>
                <a class='text-primary' href='javascript:void(0);' onclick='ubah(\"$spp->id_spp\")'><i class='fas fa-edit'></i>Ubah</a>
                "
            ));
        endforeach;

        echo json_encode($data);
    }
    
    public function detail_spp(){
        $id           = $this->input->post('id');
        $data_spp   = $this->Model_spp->data_spp($id)->row();

        echo json_encode($data_spp);
    }
    public function cetak(){
        $data['spp']= $this->Model_spp->cetak("spp")->result();
        $this->load->view('print/print_spp',$data);
    }
}
?> 