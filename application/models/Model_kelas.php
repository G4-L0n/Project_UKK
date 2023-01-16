<?php
class Model_kelas extends Ci_Model{
    function data_kelas($id=""){
        if($id != "")
            $query = $this->db->get_where("kelas",array("idk"=> $id));
        else
            $query = $this->db->get("kelas");

        return $query;
    }
}
?>