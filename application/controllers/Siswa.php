<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct(){
        parent ::__construct();
        $this->load->model("Model_siswa");
    }
    function select_kelas(){
        $container["result"] = array();
        $data = $this->Model_siswa->select_kelas($this->input->get("q"))->result();

        foreach($data as $data):
            array_push($container["result"], array(
                "id"    => $data->kelas,
                "text"  => $data->nama
            ));
        endforeach;
        echo(json_endcode($container));
    }
    function select_spp(){
        $container["result"] = array();
        $data = $this->Model_siswa->select_spp($this->input->get("q"))->result();

        foreach($data as $data):
            array_push($container["result"], array(
                "id"    => $data->spp,
                "text"  => $data->nominal
            ));
            
        endforeach;
        echo(json_endcode($container));
    }

    public function tambah_siswa(){
        $nisn       = $this->input->post("nisn");
        $nis        = $this->input->post("nis");
        $nama       = $this->input->post("nama");
        $kelas      = $this->input->post("kelas");
        $alamat     = $this->input->post("alamat");
        $no_telp    = $this->input->post("no_telp");
        $spp        = $this->input->post("spp");

        $data       = array("nisn"      => $nisn,
                            "nis"       => $nis,
                            "nama"      => $nama,
                            "kelas"     => $kelas,
                            "alamat"    => $alamat,
                            "no_telp"   => $no_telp,
                            "spp"       => $spp
                            );

        $insert     = $this->Model_siswa->insert_data($data);
        if($insert)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di tambah"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di tambah"));
    }
    function hapus_siswa(){
        $id     = $this->input->post('id');
        $where  = array("nisn" => $id);
        $delete = $this->Model_siswa->delete_data($where);
        if($delete)
            echo json_encode(array("icon" => "success",
                                    "judul" => "Berhasil", 
                                    "isi" => "Data berhasil di hapus"));
        else
            echo json_encode(array("icon" => "error", 
                                    "judul" => "Ngelag", 
                                    "isi" => "Data gagal di hapus"));
    }
    function data_siswa(){
        $data['data']   = array();
        $data_siswa     =$this->Model_siswa->data_siswa();
        foreach($data_siswa->result() as $siswa):
            
            array_push($data['data'],array(
                $siswa->nisn,
                $siswa->nis,
                $siswa->nama,
                $siswa->id_kelas,
                $siswa->alamat,
                $siswa->no_telp,
                $siswa->id_spp,
                "<a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$siswa->nisn\")'><i class='fas fa-trash'></i> Hapus</a>"
            ));
        endforeach;
        
        echo json_encode($data);
    }
}
