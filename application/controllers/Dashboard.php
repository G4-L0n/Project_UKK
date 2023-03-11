<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard extends CI_Controller
{
	public function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('Model_pembayaran');
		$this->load->model('Model_spp');
		$this->load->model('Model_siswa');
		if(!$this->auth_model->current_user()){
			redirect(site_url('auth/login'));
		}
	}
	public function index()
	{	
		$data = [
            "current_user"      => $this->auth_model->current_user(),
			"pembayaran_count"  => $this->Model_pembayaran->count(),
			"spp_count"         => $this->Model_spp->count(),
			"siswa_count"       => $this->Model_siswa->count()
		];
        $this->load->view('dashboard.php', $data);
	}
}
?>