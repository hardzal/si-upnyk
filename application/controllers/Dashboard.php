<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == NULL) {
			redirect('login/logout');
			exit();
		}
		if (checkRoleMenus($this->session->userdata('role_id'))) {
			redirect(base_url());
		}
		$this->load->model('MGrafik', 'grafik');
	}

	public function index()
	{
		$data['grafik'] = $this->grafik->getAllGrafik();
		$data['isi_grafik'] = $this->grafik->getAllIsiGrafik();

		$this->load->view('admin/home', $data);
	}
}
