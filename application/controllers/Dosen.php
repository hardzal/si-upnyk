<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('username') == NULL) {
			redirect('login/logout');
			exit();
		}
		$this->load->model('mdata');
	}

	public function index()
	{
		$this->load->view('dosen/home');
	}
}
