<?php
class Model_spp extends Ci_Model{
    function data_spp($id = ""){
        if($id != "")
            $query = $this->db->get->get_where("spp",array("id_spp"=> $id));
        else
            $query = $this->db->get("spp");

        return $query;
    }
    function insert_data($data){
        return $this->db->insert("spp", $data);
    }

    function delete_data($where){
                $this->db->where($where);
        return $this ->db->delete("spp");
    }
}
?>