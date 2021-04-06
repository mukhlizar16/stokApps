<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Register extends CI_Controller
{

	public function index()
	{
		$data['title'] = 'Register';
		$this->template->load('frontend/template/master', 'frontend/register', $data, false);
	}

	function _rules()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|xss_clean|required|min_length[3]', [
			'required' => '%s wajib diisi',
			'min_length' => '%s minimal 3 huruf',
		]);
		$this->form_validation->set_rules('phone', 'Nomor Handphone', 'trim|xss_clean|required|min_length[5]', [
			'required' => '%s wajib diisi',
			'min_length' => '%s minimal 5 karakter',
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|xss_clean|required|valid_email|is_unique[user.email]', [
			'required' => '%s wajib diisi',
			'valid_email' => '%s tidak valid',
			'is_unique' => '%s telah terdaftar, pilih email lainnya',
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|xss_clean|required|min_length[4]', [
			'required' => '%s wajib diisi',
			'min_length' => '%s minimal 4 karakter'
		]);
		$this->form_validation->set_rules('alamat', 'Alamat', 'trim|xss_clean|required', [
			'required' => '%s wajib diisi',
		]);
	}

	public function simpan()
	{
		$this->_rules();
		if ($this->form_validation->run() == false) {
			$arr_data = [
				'status' => 'error',
				'pesan' => validation_errors(),
				'alamat' => ''
			];
		} else {
			$email = $this->input->post('email');
			$cek_email = $this->Register_m->cekdata($email);
			if ($cek_email->num_rows() > 0) {
				$arr_data = [
					'status' => 'ada',
					'pesan' => 'Anda sudah terdaftar',
					'alamat' => ''
				];
			} else {
				$data = [
					'nama' => $this->input->post('nama'),
					'email' => $this->input->post('email'),
					'no_hp' => $this->input->post('phone'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'alamat' => $this->input->post('alamat'),
					'level' => 3,
					'created_at' => date('Y-m-d H:i:s'),
					'deleted_by' => 0,
					'is_delete' => 0,
				];
				$data_clean = $this->security->xss_clean($data);
				$simpan = $this->Register_m->saveData($data_clean);
				if ($simpan) {
					$arr_data = [
						'status' => 'sukses',
						'pesan' => 'Sukses menyimpan data ...',
						'alamat' => config_item('base_url') . 'welcome'
					];
				} else {
					$arr_data = [
						'status' => 'gagal_simpan',
						'pesan' => 'Gagal menyimpan data ...',
						'alamat' => ''
					];
				}
			}
		}
		echo json_encode($arr_data);
	}

	public function about()
	{
		echo 'sukses';
	}
}
