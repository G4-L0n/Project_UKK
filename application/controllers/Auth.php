<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller
{
	public function index()
	{
		show_404();
	}

	public function login()
	{
		$this->load->model('Auth_model');
		$this->load->library('form_validation');

		$rules = $this->Auth_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login_form');
		}

		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($this->Auth_model->login($username, $password)){
			redirect('./');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username dan password benar!');
		}

		$this->load->view('login_form');
	}
	public function siswa()
	{
		$this->load->model('Auts_model');
		$this->load->library('form_validation');

		$rules = $this->Auts_model->rules();
		$this->form_validation->set_rules($rules);

		if($this->form_validation->run() == FALSE){
			return $this->load->view('login_siswa');
		}

		$nama = $this->input->post('nama');
		$nis = $this->input->post('nis');

		if($this->Auts_model->login($nama, $nis)){
			redirect('./');
		} else {
			$this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan nama dan nis benar!');
		}

		$this->load->view('login_siswa');
	}

	public function logout()
	{
		$this->load->model('Auth_model');
		$this->Auth_model->logout();
		redirect(site_url());
	}
	
	public function logouts()
	{
		$this->load->model('Auts_model');
		$this->Auts_model->logout();
		redirect(site_url());
	}
}
?>