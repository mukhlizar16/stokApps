<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

	public function index()
	{
		if (is_login()){
			$this->switch();
		}
		$data['title'] = 'Login';
		$this->template->load('frontend/template/master', 'frontend/login', $data, false);
	}

	public function masuk()
	{
		if ($this->input->is_ajax_request()) {
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email', [
				'required' => '%s wajib diisi',
				'valid_email' => '%s harus valid'
			]);
			$this->form_validation->set_rules('password', 'Password', 'trim|required', [
				'required' => '%s wajib diisi'
			]);

			if ($this->form_validation->run() == false) {
				$arr_data = [
					'status' => 'Error',
					'pesan' => validation_errors()
				];
			} else {
				$username = $this->input->post('email');
				$userpass = $this->input->post('password');
				$cek_email = $this->Login_m->email_check($username);
				if ($cek_email->num_rows() > 0) {
					foreach ($cek_email->result_array() as $c) {
						$pass = $c['password'];
						if (password_verify($userpass, $pass)) {
							$data = array(
								'id' => $c['id'],
								'nama' => $c['nama'],
								'level' => $c['level'],
								'status_login' => '1'
							);
							$this->session->set_userdata($data);
							$arr_data = [
								'status' => 'Sukses',
								'pesan' => 'Sukses untuk login',
								'alamat' => config_item('base_url') . 'login/switch'
							];
						} else {
							$arr_data = [
								'status' => 'error_pass',
								'pesan' => 'Password salah ...'
							];
						}
					}
				} else {
					$arr_data = [
						'status' => 'no-email',
						'pesan' => 'Email anda tidak terdaftar'
					];
				}
			}
			echo json_encode($arr_data);
		} else {
			echo 'No direct script access allowed';
		}
	}

	public function switch()
	{
		$level = $_SESSION['level'];
		if($level == 1){
			redirect('admin', 'refresh');
		}else{
			redirect('kasir', 'refresh');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome', 'refresh');
	}
}

