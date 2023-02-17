<?php
class Model_siswa extends Ci_Model{
    function data_siswa($id = ""){
        if($id != "")
            $query = $this->db->get->get_where("siswa",array("nisn"=> $id));
        else
            $query = $this->db->get("siswa");

        return $query;
    }
    function insert_data($data){
        return $this->db->insert("siswa", $data);
    }

    function delete_data($where){
                $this->db->where($where);
        return $this ->db->delete("siswa");
    }
}
?>