<?php

class Auts_model extends CI_Model
{
	const SESSION_KEY = 'nisn';

	public function rules()
	{
		return [
			[
				'field' => 'nama',
				'label' => 'nama',
				'rules' => 'required'
			],
			[
				'field' => 'nis',
				'label' => 'nis',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($nama, $nis)
	{
		$this->db->where('nama', $nama);
		$this->db->where('nis', $nis);
		$query = $this->db->get("siswa");
		$siswa = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$siswa) {
			return FALSE;
		}

		// cek apakah nisnya benar?
		if (!$nis) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $siswa->nisn]);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$nisn = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where("siswa", ['nisn' => $nisn]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

}
?>