<?php
class Model_siswa extends CI_Model {
    function data_siswa($id = ""){
        if($id != "")
          $query = $this->db->get_where("siswa", array("nisn" => $id));
        else{      
            $this->db->join("kelas", "kelas.id_kelas = siswa.id_kelas", "inner");
            $this->db->join("spp", "spp.id_spp = siswa.id_spp", "inner");
            $query = $this->db->get_where("siswa");    
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

    //UPDATE
    function update_data($data, $where){
      $this->db->set($data);
      $this->db->where($where);
return $this->db->update("siswa");
}
    //select 2 kelas
    function select_kelas($q = ""){
      if($q != "")
          $this->db->where("nama LIKE '%$q%'");
      return $this->db->get("kelas");
  }
  
    function select_spp($q = ""){
      if($q != "")
          $this->db->where("nominal LIKE '%$q%'");

      return $this->db->get("spp");
  }
}
?>