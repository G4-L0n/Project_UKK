<?php
class Model_login extends CI_Model{
  //CEK PETUGAS
  function user_check($username){
	$table = "petugas";
	$check = array("username" => $username);
    return $this->db->get_where($table, $check);
  }
  
  //CEK SISWA
  function siswa_check($nisn){
	$table = "siswa";
	$check = array("nisn" => $nisn);
    return $this->db->get_where($table, $check);
  }
}
?>
