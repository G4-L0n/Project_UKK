<?php
class Model_spp extends CI_Model {
  //READ
  function data_spp($id = ""){
      if($id != "")
        $query = $this->db->get_where("spp", array("id_spp" => $id));
      else
        $query = $this->db->get("spp");
      return $query;
  }

  //CREATE
  function insert_data($data){
    return $this->db->insert("spp", $data);
  }

  //DELETE
  function delete_data($where){
           $this->db->where($where);
    return $this->db->delete("spp");
  }

  //UPDATE
  function update_data($data, $where){
           $this->db->set($data);
           $this->db->where($where);
    return $this->db->update("spp");
  }
  
  //PRINT
  function cetak(){
    return $this->db->get("spp");
  }
}
?>