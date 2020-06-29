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
		if (checkRoleMenus($this->session->userdata('role_id'))) {
			redirect(base_url());
		}

		if ($this->session->userdata('username') == NULL) {
			redirect('login/logout');
			exit();
		}
		$this->load->model('mdata');

		if ($this->session->userdata('role_id') != 2) {
			redirect(base_url());
		}
	}

	public function index()
	{
		$this->load->view('dosen/home');
	}

	public function Berita()
	{
		// $data['berita'] = $this->mdata->all_berita()->result();
		$data['berita'] = $this->mdata->beritaByRole($this->session->userdata('role_id'));
		$this->load->view('dosen/berita', $data);
	}

	public function addberita()
	{
		$this->load->view('dosen/addBerita');
	}

	public function insertBerita()
	{
		$data = array(
			'judul' 			=> $this->input->post('judul'),
			'user_id' 		=> $this->session->userdata('user_id'),
			'tgl' 			=> $this->input->post('tgl'),
			'isi' 				=> $this->input->post('isi'),
			'file' 				=> $this->input->post('file')
		);
		var_dump($data);
		die();
		$config['upload_path']          = './assets/images/berita';
		$config['max_size']             = 10000;
		$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

		$this->load->library('upload', $config);
		$this->upload->initialize($config);

		$status = $this->upload->do_upload('file');

		if ($data) {
			$upload_data = $this->upload->data();
			$name = $upload_data['file_name'];
			$data['file'] = 'berita/' . $name;
			$this->mdata->insertberita($data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
		}


		redirect(site_url('dosen/berita'));
	}

	public function ubahberita($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		$this->load->view('dosen/editBerita', $data);
	}

	public function updateberita()
	{
		$data = array(
			'id' 			=> $this->input->post('id'),
			'judul' 		=> $this->input->post('judul'),
			'tgl' 			=> $this->input->post('tgl'),
			'isi' 			=> $this->input->post('isi')
		);

		if ($_FILES['file']['tmp_name'] != '') {

			$config['upload_path']          = './assets/images/berita/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

			$this->load->library('upload');
			$this->upload->initialize($config);

			$id = $this->input->post('id');

			$data['file'] = $this->mdata->idberita($id)->row();
			$a = $data['file']->file;


			if (file_exists('./assets/images/' . $a)) {
				unlink('./assets/images/' . $a);
			}

			$status = $this->upload->do_upload('file');

			if ($status) {
				$upload_data = $this->upload->data();
				$data['file'] = 'berita/' . $upload_data['file_name'];
			}
		}

		$id = $this->input->post('id');
		$this->mdata->update_berita($id, $data);
		$this->session->set_flashdata('notif', '<div class="alert alert-success">Berhasil disimpan</div>');
		redirect(site_url('dosen/berita'));
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
