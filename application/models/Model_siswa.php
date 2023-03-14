<?php

class Model_siswa extends CI_Model {
  //READ
  function data_siswa($id = ""){
    if($id != "")
      $query = $this->db->get_where("siswa", array("nisn" => $id));
    else{
               $this->db->join("kelas", "kelas.id_kelas = siswa.id_kelas", "inner");
               $this->db->join("spp", "spp.id_spp = siswa.id_spp", "inner");
      $query = $this->db->get("siswa");
    }
    return $query;
  }

  //CREATE
  function insert_data($data){
    return $this->db->insert("siswa", $data);
  }

  //DELETE
  function delete_data($where){
           $this->db->where($where);
    return $this->db->delete("siswa");
  }

  //SELECT KELAS
  function select_kelas($q = ""){
    if($q != "")
           $this->db->where("nama_kelas LIKE '%$q%'");
    return $this->db->get("kelas");
  }
  
  //SELECT SPP
  function select_spp($q = ""){
    if($q != "")
           $this->db->where("nominal LIKE '%$q%'");
    return $this->db->get("spp");
  }

  //UPDATE
  function update_data($data, $where){
           $this->db->set($data);
           $this->db->where($where);
    return $this->db->update("siswa");
  }

  //COUNT
  Public function count(){
    return $this->db->count_all("siswa");
  }

  //PRINT
  function cetak(){
           $this->db->join("kelas", "kelas.id_kelas = siswa.id_kelas", "inner");
           $this->db->join("spp", "spp.id_spp = siswa.id_spp", "inner");
    return $this->db->get("siswa");
  }
}
?>