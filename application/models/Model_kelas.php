<?php
class Model_kelas extends Ci_Model{
    function data_kelas($id = ""){
        if($id != "")
            $query = $this->db->get_where("kelas",array("id_kelas"=> $id));
        else
            $query = $this->db->get("kelas");

        return $query;
    }
    function insert_data($data){
        return $this->db->insert("kelas", $data);
    }

    function delete_data($where){
                $this->db->where($where);
        return $this ->db->delete("kelas");
    }
    function update_data($data, $where){
            $this->db->set($data);
            $this->db->where($where);
    return $this->db->update("kelas");
    }
}
?>