<?php
class Model_pembayaran extends Ci_Model{
    function data_pembayaran($id = ""){
        if($id != "")
            $query = $this->db->get->get_where("pembayaran",array("id_pembayaran"=> $id));
        else
            $query = $this->db->get("pembayaran");

        return $query;
    }
    function insert_data($data){
        return $this->db->insert("pembayaran", $data);
    }

    function delete_data($where){
                $this->db->where($where);
        return $this ->db->delete("pembayaran");
    }
}
?>