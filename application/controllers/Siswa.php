<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_siswa");
    }

    function select_kelas(){
        $container["results"] = array();
        $data = $this->Model_siswa->select_kelas($this->input->get("q"))->result();

        foreach($data as $data):
              array_push($container["results"], array(
                  "id"   => $data->id_kelas,
                  "text" => $data->nama_kelas

              ));
        endforeach;

        echo(json_encode($container));
    }
    function select_spp(){
        $container["results"] = array();
        $data = $this->Model_siswa->select_spp($this->input->get("q"))->result();

        foreach($data as $data):
              array_push($container["results"], array(
                  "id"   => $data->id_spp,
                  "text" => $data->nominal

              ));
        endforeach;

        echo(json_encode($container));
    }

    public function tambah_siswa(){
        $id_kelas     =$this->input->post("id_kelas");
        $nisn         =$this->input->post("nisn");
        $nis          =$this->input->post("nis");
        $nama         =$this->input->post("nama");
        $alamat       =$this->input->post("alamat");
        $no_telp      =$this->input->post("no_telp");
        $id_spp       =$this->input->post("id_spp");
        $status       =$this->input->post("status");

        if($status == "insert"){
            $data        = array("nisn"             => $nisn,
                                 "nis"              => $nis,
                                 "nama"             => $nama,
                                 "id_kelas"         => $id_kelas,
                                 "alamat"           => $alamat,
                                 "no_telp"          => $no_telp,
                                 "id_spp"           => $id_spp);

                      
        $insert      =$this->Model_siswa->insert_data($data);

        if($insert)
            echo json_encode(
                            array(
                                "icon"   => "success",
                                "judul"  => "Berhasil",
                                "isi"    => "Data berhasil ditambahkan")
                            );
        
        else 
            echo json_encode(
                            array(
                                "icon"   => "error",
                                "judul"  => "error",
                                "isi"    => "Data gagal ditambahkan")
                            );
        } else if ($status == "update"){
            $nisn             = $this->input->post('nisn');
            $data             = array("id_kelas"         => $id_kelas,
                                      "nisn"             => $nisn,
                                      "nis"              => $nis,
                                      "nama"             => $nama,
                                      "alamat"           => $alamat,
                                      "no_telp"          => $no_telp,
                                      "id_spp"           => $id_spp);
             $where           = array("nisn"             => $nisn);
             
             $update          =$this->Model_siswa->update_data($data, $where);

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

    function hapus_siswa(){
        $id      = $this->input->post('id');
        $where   = array("nisn" => $id);
        $delete  = $this->Model_siswa->delete_data($where);
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

    function data_siswa(){
        $a = 1;
        $data['data'] = array();
        $data_siswa  = $this->Model_siswa->data_siswa();
        foreach($data_siswa->result() as $siswa):
            array_push($data['data'], array(
                $a++,
                $siswa->nisn, 
                $siswa->nis,
                $siswa->nama,
                $siswa->nama_kelas,
                $siswa->alamat,
                $siswa->no_telp,
                $siswa->nominal,
                "
                <a class='text-danger' href='javascript:void(0)' onclick='hapus(\"$siswa->nisn\")'><i class='fas fa-trash'></i>Hapus</a>
                <br>
                <a class='text-primary' href='javascript:void(0);' onclick='ubah(\"$siswa->nisn\")'><i class='fas fa-edit'></i>Ubah</a>
                "
            ));
        
        endforeach;
        
        echo json_encode($data);
    }
    function detail_siswa(){
        $id           = $this->input->post('nisn');
        $data_siswa     = $this->Model_siswa->data_siswa($id)->row();

        echo json_encode($data_siswa);
    }
    public function cetak(){
        $data['siswa']= $this->Model_siswa->cetak("siswa")->result();
        $this->load->view('print/print_siswa',$data);
    }
   
}
?>