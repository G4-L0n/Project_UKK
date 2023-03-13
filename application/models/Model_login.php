<?php
class Model_login extends CI_Model{

    function user_check($username){
		$table = "petugas" ;
		$check = array("username" => $username);

      return $this->db->get_where($table, $check);
    }
    
    function siswa_check($nisn){
		$table = "siswa" ;
		$check = array("nisn" => $nisn);

      return $this->db->get_where($table, $check);
    }
}
?>
