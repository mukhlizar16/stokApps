<?php
defined('BASEPATH') or exit ('No direct script access alowed');

class Login_m extends CI_Model
{

	public function email_check($username)
	{
		return $this->db->get_where('user', ['email' => $username]);
	}
}
