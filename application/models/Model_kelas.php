<?php
class Model_kelas extends CI_Model {
  //READ
  function data_kelas($id = ""){
    if($id != "")
      $query = $this->db->get_where("kelas", array("id_kelas" => $id));
    else
      $query = $this->db->get("kelas");
    return $query;
  }
  
  //CREATE
  function insert_data($data){
    return $this->db->insert("kelas", $data);
  }
  
  //DELETE
  function delete_data($where){
           $this->db->where($where);
    return $this->db->delete("kelas");
  }
  
  //UPDATE
  function update_data($data, $where){
          $this->db->set($data);
          $this->db->where($where);
   return $this->db->update("kelas");
  }

  //COUNT
  public function count(){
    return $this->db->count_all("kelas");
  }

  //PRINT
  function cetak(){
    return $this->db->get("kelas");
  }
}
?>