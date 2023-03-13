<?php
class Model_petugas extends CI_Model {
    
    function data_petugas($id = ""){
        if($id != "")
          $query = $this->db->get_where("petugas", array("id_petugas" => $id));
        else
          $query = $this->db->get("petugas");

        return $query;
    }
    
    function insert_data($data){
      return $this->db->insert("petugas", $data);
    }

    function delete_data($where){
             $this->db->where($where);
      return $this->db->delete("petugas");
    }

    function update_data($data, $where){
            $this->db->set($data);
            $this->db->where($where);
     return $this->db->update("petugas");
    }

    public function count(){
      return $this->db->count_all("petugas");
    }
    function cetak(){
      return $this->db->get("petugas");
    }
}
?>