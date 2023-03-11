<?php

class Auth_model extends CI_Model
{
	const SESSION_KEY = 'id_petugas';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username',
				'rules' => 'required'
			],
			[
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|max_length[255]'
			]
		];
	}

	public function login($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$query = $this->db->get("petugas");
		$petugas = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$petugas) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!$password) {
			return FALSE;
		}

		// bikin session
		$this->session->set_userdata([self::SESSION_KEY => $petugas->id_petugas]);

		return $this->session->has_userdata(self::SESSION_KEY);
	}

	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$id_petugas = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where("petugas", ['id_petugas' => $id_petugas]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

}
?>