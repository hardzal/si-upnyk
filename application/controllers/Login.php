<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mlogin', 'mod');
	}

	public function index()
	{
		$this->load->view('login');
	}

	public function proseslogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->mod->ceklogin($username, $password);

		if ($cek) {
			$data = [
				'user_id' => $cek->id,
				'role_id' => $cek->role_id,
				'username' => $cek->username
			];

			$this->session->set_userdata($data);

			if ($data['role_id'] == 1) {
				redirect('admin/home');
			} else if ($data['role_id'] == 2) {
				redirect('dosen/index');
			} else if ($data['role_id'] == 3) {
				redirect('mahasiswa/index');
			}
		} else {
			$this->session->set_flashdata('notif', 'Maaf, Kombinasi Username dan Password salah.');
			redirect('login');
		}
	}

	public function logout()
	{
		$a = $this->session->sess_destroy();
		redirect('login');
	}
}
