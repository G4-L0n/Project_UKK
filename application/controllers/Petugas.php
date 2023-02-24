<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_petugas");
    }

    public function tambah_petugas(){
        $username           = $this->input->post("username");
        $password           = $this->input->post("password");
        $nama_petugas       = $this->input->post("nama_petugas");
        $level              = $this->input->post("level");
        $status             = $this->input->post("status");

        if($status == "insert"){
            $data       = array("username"      => $username,
                                "password"      => $password,
                                "nama_petugas"  => $nama_petugas,
                                "level"         => $level);
                            
                $insert      =$this->Model_petugas->insert_data($data);

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
                                    
        } else if($status == "update"){
            $id_petugas    =$this->input->post("id");
            $data          = array("username"      => $username,
                                   "password"      => $password,
                                   "nama_petugas"  => $nama_petugas,
                                   "level"         => $level);
            $where         = array("id_petugas"   => $id_petugas);
            $update        =$this->Model_petugas->update_data($data, $where);

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


    function hapus_petugas(){
        $id      = $this->input->post('id');
        $where   = array("id_petugas" => $id);
        $delete  = $this->Model_petugas->delete_data($where);
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

    function data_petugas(){
        $a = 1;
        $data['data'] = array();
        $data_petugas   = $this->Model_petugas->data_petugas();
        foreach($data_petugas->result() as $petugas):
            array_push($data['data'], array(
                $a++,
                $petugas->username,
                $petugas->password,
                $petugas->nama_petugas,
                $petugas->level,
                "
                <a class='text-danger' href='javascript:void(0);' onclick='hapus(\"$petugas->id_petugas\")'><i class='fas fa-trash'></i>Hapus</a>
                <br>
                <a class='text-primary' href='javascript:void(0);' onclick='ubah(\"$petugas->id_petugas\")'><i class='fas fa-edit'></i>Ubah</a>
                "
            ));
        endforeach;

        echo json_encode($data);
    }
    
    public function detail_petugas(){
        $id           = $this->input->post('id');
        $data_petugas   = $this->Model_petugas->data_petugas($id)->row();

        echo json_encode($data_petugas);
    }
} 



