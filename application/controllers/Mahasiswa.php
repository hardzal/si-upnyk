<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mahasiswa extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role_id') != 3) {
			redirect(base_url());
		}
	}

	public function index()
	{
		echo "hello? mahasiswa";
		echo "<a href=" . base_url('login/logout') . ">Logout</a>";
	}
}
