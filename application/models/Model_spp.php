<?php
class Model_spp extends CI_Model {
    
    function data_spp($id = ""){
        if($id != "")
          $query = $this->db->get_where("spp", array("id_spp" => $id));
        else
          $query = $this->db->get("spp");

        return $query;
    }
    
    function insert_data($data){
      return $this->db->insert("spp", $data);
    }

    
    function delete_data($where){
             $this->db->where($where);
      return $this->db->delete("spp");
    }

    
    function update_data($data, $where){
            $this->db->set($data);
            $this->db->where($where);
     return $this->db->update("spp");
    }
}
?>