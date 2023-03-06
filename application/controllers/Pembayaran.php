<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model("Model_pembayaran");
    }

    function select_petugas(){
        $container["results"] = array();
        $data = $this->Model_pembayaran->select_petugas($this->input->get("q"))->result();

        foreach($data as $data):
              array_push($container["results"], array(
                  "id"   => $data->id_petugas,
                  "text" => $data->nama_petugas

              ));
        endforeach;

        echo(json_encode($container));
    }
    function select_siswa(){
        $container["results"] = array();
        $data = $this->Model_pembayaran->select_siswa($this->input->get("q"))->result();

        foreach($data as $data):
              array_push($container["results"], array(
                  "id"   => $data->nisn,
                  "text" => $data->nama_siswa

              ));
        endforeach;

        echo(json_encode($container));
    }
    function select_spp(){
        $container["results"] = array();
        $data = $this->Model_pembayaran->select_spp($this->input->get("q"))->result();

        foreach($data as $data):
              array_push($container["results"], array(
                  "id"   => $data->id_spp,
                  "text" => $data->nominal

              ));
        endforeach;

        echo(json_encode($container));
    }

    public function tambah_pembayaran(){
        $id_petugas       =$this->input->post("id_petugas");
        $nisn             =$this->input->post("nisn");
        $tgl_bayar        =$this->input->post("tgl_bayar");
        $bulan_dibayar    =$this->input->post("bulan_dibayar");
        $tahun_dibayar    =$this->input->post("tahun_dibayar");
        $id_spp           =$this->input->post("id_spp");
        $jumlah_bayar     =$this->input->post("jumlah_bayar");
        $status           =$this->input->post("status");

        if($status == "insert"){
            $data = array(
                "id_petugas"      => $id_petugas,
                "nisn"            => $nisn,
                "tgl_bayar"       => $tgl_bayar,
                "bulan_dibayar"   => $bulan_dibayar,
                "tahun_dibayar"   => $tahun_dibayar,
                "id_spp"          => $id_spp,
                "jumlah_bayar"    => $jumlah_bayar
            );

                      
        $insert      =$this->Model_pembayaran->insert_data($data);

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
            $id_pembayaran = $this->input->post('id_pembayaran');
            $data        = array(
                "id_petugas"      => $id_petugas,
                "nisn"            => $nisn,
                "tgl_bayar"       => $tgl_bayar,
                "bulan_dibayar"   => $bulan_dibayar,
                "tahun_dibayar"   => $tahun_dibayar,
                "id_spp"          => $id_spp,
                "jumlah_bayar"    => $jumlah_bayar
            );
             $where           = array("id_pembayaran" => $id_pembayaran);
             
             $update          =$this->Model_pembayaran->update_data($data, $where);

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

    function hapus_pembayaran(){
        $id      = $this->input->post('id');
        $where   = array("id_pembayaran" => $id);
        $delete  = $this->Model_pembayaran->delete_data($where);
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

    function data_pembayaran(){
        $a = 1;
        $data['data'] = array();
        $data_pembayaran  = $this->Model_pembayaran->data_pembayaran();
        foreach($data_pembayaran->result() as $pembayaran):
            array_push($data['data'], array(
                $a++,
                $pembayaran->id_pembayaran,
                $pembayaran->nama_petugas,
                $pembayaran->nama_siswa,
                $pembayaran->tgl_bayar,
                $pembayaran->bulan_dibayar,
                $pembayaran->tahun_dibayar,
                $pembayaran->nominal,
                $pembayaran->jumlah_bayar,
                "
                <a class='text-danger' href='javascript:void(0)' onclick='hapus(\"$pembayaran->id_pembayaran\")'><i class='fas fa-trash'></i>Hapus</a>
                <br>
                <a class='text-primary' href='javascript:void(0);' onclick='ubah(\"$pembayaran->id_pembayaran\")'><i class='fas fa-edit'></i>Ubah</a>
                "
            ));
        
        endforeach;
        
        echo json_encode($data);
    }
    function detail_pembayaran(){
        $id           = $this->input->post('id');
        $data_pembayaran     = $this->Model_pembayaran->data_pembayaran($id)->row();

        echo json_encode($data_pembayaran);
    }
   
}
?>