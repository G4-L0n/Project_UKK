<?php

class Model_pembayaran extends CI_Model {
    //READ
    function data_pembayaran($id = ""){
        if($id != "")
          $query = $this->db->get_where("pembayaran", array("id_pembayaran" => $id));
        else{
                    $this->db->join("petugas", "petugas.id_petugas = pembayaran.id_petugas", "inner");
                    $this->db->join("siswa", "siswa.nisn = pembayaran.nisn", "inner");
                    $this->db->join("spp", "spp.id_spp = pembayaran.id_spp", "inner");
          $query = $this->db->get("pembayaran");
        }

        return $query;
  
    }
    //CREATE
    function insert_data($data){
      return $this->db->insert("pembayaran", $data);
    }

    //DELETE
    function delete_data($where){
             $this->db->where($where);
      return $this->db->delete("pembayaran");
    }
    //select 2 keelas
    function select_petugas($q = ""){
      if($q != "")
          $this->db->where("nama_petugas LIKE '%$q%'");

      return $this->db->get("petugas");
  }

    function select_siswa($q = ""){
      if($q != "")
          $this->db->where("nama LIKE '%$q%'");

      return $this->db->get("siswa");
  }
  
    function select_spp($q = ""){
      if($q != "")
          $this->db->where("nominal LIKE '%$q%'");

      return $this->db->get("spp");
  }

  //UPDATE
    function update_data($data, $where){
             $this->db->set($data);
             $this->db->where($where);
      return $this->db->update("pembayaran");
    }
    public function count(){
      return $this->db->count_all("pembayaran");
    }
}
?>