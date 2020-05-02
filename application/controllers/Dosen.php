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
		if($this->session->userdata('role_id') != 2) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->view('dosen/home');
	}

	public function Berita()
	{
		$data['berita'] = $this->mdata->all_berita()->result();
		$this->load->view('dosen/berita', $data);
	}

	public function addberita()
	{
		$this->load->view('dosen/addBerita');
	}

	public function ubahberita($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		$this->load->view('dosen/editBerita', $data);
	}
	public function beritaDosen($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		$this->load->view('admin/beritaadmin', $data);
	}

	//PROF Admin
	public function profadmin()
	{
		$data['admin'] = $this->mdata->profadmin()->row();
		$this->load->view('dosen/admin', $data);
	}

	public function ubahadmin($id)
	{
		$data['admin'] = $this->mdata->idadmin($id)->row();
		$this->load->view('dosen/editakun', $data);
	}

	public function updateadmin()
	{

		$data['id'] 		= $this->input->post('id');
		$data['username'] 		= $this->input->post('username');
		$data['password'] 		= md5($this->input->post('password'));

		$id = $this->input->post('id');

		$this->mdata->updateadmin($id, $data);
		redirect(site_url('dosen/profadmin'));
	}
}
