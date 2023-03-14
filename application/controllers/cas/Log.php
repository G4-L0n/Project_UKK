<?php
defined('BASEPATH') OR exit('No direct script access allowed');

//Central Authentication System
//BACKEND RESPONSE

class Log extends CI_Controller {
  function login(){
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    //1. Check_All_Request
    if(strlen($username) > 0 && strlen($password) > 0){
      //2. Check_user
      $check = $this->logsys->user_check($username);
      if($check->num_rows() > 0){
        $user_data  = $check->row();
        if(password_verify($password, $user_data->password)){
                 $nama_petugas       = $user_data->nama_petugas;
                 $username           = $user_data->username;              
                 $id_petugas         = $user_data->id_petugas;
                 $level              = ($user_data->level == "admin") ? "0" : "1";
                 
                 $sess_data  = array(
                    "id_petugas"   => $id_petugas,
                    "nama_petugas" => $nama_petugas,
                    "username" => $username,
                    "level" => $level,
                    "status"=> "online"
                  );
              $this->session->set_userdata($sess_data);
              $response = array(
                "icon"   => "success",
                "judul"  => "Berhasil", 
                "isi"    => "Login Berhasil");
        } else {
          $response = array(
            "icon"   => "error",
            "judul"  => "error", 
            "isi"    => "Login Gagal");
        }
      }
      else $response = array(
        "icon"   => "error",
        "judul"  => "error", 
        "isi"    => "Username Salah");
    } else {
      $response = array(
        "icon"   => "error",
        "judul"  => "error", 
        "isi"    => "Username dan Password Salah");
    }

      echo json_encode($response);
  }

  function siswa(){
    $nisn = $this->input->post('nisn');

    //1. Check_All_Request
    if(strlen($nisn) > 0){
      //2. Check_user
      $check = $this->logsys->siswa_check($nisn);
      if($check->num_rows() > 0){
        $user_data  = $check->row();
                 $nama        = $user_data->nama;           
                 $nisn        = $user_data->nisn;
                 $level       = 3;
                 $sess_data   = array(
                    "nama" => $nama,
                    "nisn" => $nisn,
                    "level" => $level,
                    "status"=> "online"
                  );
              $this->session->set_userdata($sess_data);
              $response = array(
                "icon"   => "success",
                "judul"  => "Berhasil", 
                "isi"    => "Login Berhasil");
      }
      else $response = array(
        "icon"   => "error",
        "judul"  => "error", 
        "isi"    => "NISN Salah");
    } else {
      $response = array(
        "icon"   => "error",
        "judul"  => "error", 
        "isi"    => "Data Kosong");
    }

      echo json_encode($response);
  }

  function logout(){
    $this->session->sess_destroy();
    redirect(base_url());
  }

}
