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
        $status     = $this->input->post("status");

        if($status == "insert"){
        $data       = array(
                            "nama"      => $nama,
                            "jurusan"   => $jurusan
                            );

        $insert     = $this->Model_kelas->insert_data($data);
        if($insert)
            echo json_encode(
                            array(
                            "icon" => "success",
                            "judul" => "Berhasil", 
                            "isi" => "Data berhasil di tambah"
                                 )
                            );
        else
            echo json_encode(
                            array(
                            "icon" => "error", 
                            "judul" => "Ngelag", 
                            "isi" => "Data gagal di tambah"
                                 )
                            );
        }else if($status == "update"){
            $id_kelas   = $this->input->post("id");
            $data       = array(
                                "nama"      => $nama,
                                "jurusan"   => $jurusan
                                );
            $where      = array("id_kelas"  => $id_kelas);
            $update     = $this->Model_kelas->update_data($data, $where);
            if($update)
            echo json_encode(
                            array(
                            "icon"  => "success",
                            "judul" => "Berhasil", 
                            "isi"   => "Data berhasil di ubah"
                                 )
                            );
        else
            echo json_encode(
                            array(
                            "icon"  => "error", 
                            "judul" => "Ngelag", 
                            "isi"   => "Data gagal di ubah"
                                 )
                            );
        }
    }
    function hapus_kelas(){
        $id     = $this->input->post('id');
        $where  = array("id_kelas" => $id);
        $delete = $this->Model_kelas->delete_data($where);
        if($delete)
            echo json_encode(
                            array(
                            "icon"  => "success",
                            "judul" => "Berhasil", 
                            "isi"   => "Data berhasil di hapus"
                                 )
                            );
        else
            echo json_encode(
                            array(
                            "icon"  => "error", 
                            "judul" => "Ngelag", 
                            "isi"   => "Data gagal di hapus"
                                 )
                            );
    }
    function data_kelas(){
        $a = 1;
        $data['data']   = array();
        $data_kelas     =$this->Model_kelas->data_kelas();
        foreach($data_kelas->result() as $kelas):
            
            array_push($data['data'],array(
                $a++,
                $kelas->id_kelas,
                $kelas->nama,
                $kelas->jurusan,
                "
                <a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$kelas->id_kelas\")'><i class='fas fa-trash'></i> Hapus</a>
                <br>
                <a class='text-primary' href='javascript:void(0);' onclick='ubah(\"$kelas->id_kelas\")'><i class='fas fa-edit'></i> Ubah</a>
                "
            ));
        endforeach;
        
        echo json_encode($data);
    }

    public function detail_kelas(){
        $id             = $this->input->post('id');
        $data_kelas     = $this->Model_kelas->data_kelas($id)->row();
        echo json_encode($data_kelas);
    }
}