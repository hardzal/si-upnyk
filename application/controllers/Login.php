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
		if ($this->session->userdata('user_id')) {
			redirect('Admin');
		}

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
			redirect('dashboard');
		} else {
			$this->session->set_flashdata('notif', '<div class="alert alert-danger">Maaf, Kombinasi Username dan Password salah.</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		$a = $this->session->sess_destroy();
		redirect('login');
	}
}
