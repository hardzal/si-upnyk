<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dosen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if($this->session->userdata('role_id') != 2) {
			redirect(base_url());
		}
	}

	public function index()
	{
		echo "hello? dosen";
		echo "<a href=" . base_url('login/logout') . ">Logout</a>";
	}
}
