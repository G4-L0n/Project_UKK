<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_kelas');
		$this->load->model('Model_petugas');
		$this->load->model('Model_siswa');
	}
	public function index()
	{
		if($this->session->userdata("status") == "online"){
			$this->load->view('head');
			$data = [
				"count_kelas" => $this->Model_kelas->count(),
				"count_petugas" => $this->Model_petugas->count(),
				"count_siswa" => $this->Model_siswa->count()
			];
			$this->load->view('body', $data);
		} else {
			$this->load->view("login");
		}

	}
}
?>