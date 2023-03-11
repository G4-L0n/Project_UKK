<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Page extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('auts_model');
		$this->load->model('Model_pembayaran');
		$this->load->model('Model_spp');
		$this->load->model('Model_siswa');
		if($this->auth_model->current_user()){
			
		}else if($this->auts_model->current_user()){

		}else{
			redirect(site_url('auth/login'));
		}
	}
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index(){
		$this->load->view('_partials/head');
		if($this->auth_model->current_user()){
			$this->load->view('_partials/body', [
        	    "current_user"      => $this->auth_model->current_user(),
				"pembayaran_count"  => $this->Model_pembayaran->count(),
				"spp_count"         => $this->Model_spp->count(),
				"siswa_count"       => $this->Model_siswa->count()
			]);
		}else if($this->auts_model->current_user()){
			$this->load->view('_partials/body', [
				"current_user"      => $this->auts_model->current_user(),
				"pembayaran_count"  => $this->Model_pembayaran->count(),
				"spp_count"         => $this->Model_spp->count(),
				"siswa_count"       => $this->Model_siswa->count()
			]);
		}
	}
}
?>