<?php
class Model_petugas extends Ci_Model{
    function data_petugas($id = ""){
        if($id != "")
            $query = $this->db->get->get_where("petugas",array("id_petugas"=> $id));
        else
            $query = $this->db->get("petugas");

        return $query;
    }
    function insert_data($data){
        return $this->db->insert("petugas", $data);
    }

    function delete_data($where){
                $this->db->where($where);
        return $this ->db->delete("petugas");
    }
}
?>