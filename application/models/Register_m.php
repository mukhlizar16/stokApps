<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register_m extends CI_Model {

	public function cekdata($email){
		return $this->db->get_where('user', ['email' => $email]);
	}

	public function saveData($data){
		return $this->db->insert('user', $data);
	}
}
