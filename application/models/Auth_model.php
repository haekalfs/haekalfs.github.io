<?php

class Auth_model extends CI_Model
{
	private $_table = "user";
	const SESSION_KEY = 'user_id';

	public function rules()
	{
		return [
			[
				'field' => 'username',
				'label' => 'Username or Email',
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
		$where = "email='$username' OR username = '$username' AND role = '1104'";
		$this->db->where($where);
		
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		//bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->session->set_userdata('access','1');
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY,'access');
	}

	public function login_user($username, $password)
	{
		$where = "username = '$username' AND role = '2907'";
		$this->db->where($where);
		$query = $this->db->get($this->_table);
		$user = $query->row();

		// cek apakah user sudah terdaftar?
		if (!$user) {
			return FALSE;
		}

		// cek apakah passwordnya benar?
		if (!password_verify($password, $user->password)) {
			return FALSE;
		}

		//bikin session
		$this->session->set_userdata([self::SESSION_KEY => $user->id]);
		$this->session->set_userdata('access','2');
		$this->_update_last_login($user->id);

		return $this->session->has_userdata(self::SESSION_KEY,'access');
	}


	public function current_user()
	{
		if (!$this->session->has_userdata(self::SESSION_KEY)) {
			return null;
		}

		$user_id = $this->session->userdata(self::SESSION_KEY);
		$query = $this->db->get_where($this->_table, ['id' => $user_id]);
		return $query->row();
	}

	public function logout()
	{
		$this->session->unset_userdata(self::SESSION_KEY);
		$this->session->unset_userdata('access');
		return !$this->session->has_userdata(self::SESSION_KEY);
	}

	private function _update_last_login($id)
	{
		$data = [
			'last_login' => date("Y-m-d H:i:s"),
		];

		return $this->db->update($this->_table, $data, ['id' => $id]);
	}
}