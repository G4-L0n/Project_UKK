<?php
class Model_petugas extends CI_Model {
    //READ
    function data_petugas($id = ""){
        if($id != "")
          $query = $this->db->get_where("petugas", array("id_petugas" => $id));
        else
          $query = $this->db->get("petugas");

        return $query;
    }

    //CREATE
    function insert_data($data){
      return $this->db->insert("petugas", $data);
    }

    //DELETE
    function delete_data($where){
             $this->db->where($where);
      return $this->db->delete("petugas");
    }

    //UPDATE
    function update_data($data, $where){
            $this->db->set($data);
            $this->db->where($where);
     return $this->db->update("petugas");
    }

    //COUNT
    public function count(){
      return $this->db->count_all("petugas");
    }
    
    //PRINT
    function cetak(){
      return $this->db->get("petugas");
    }
}
?>