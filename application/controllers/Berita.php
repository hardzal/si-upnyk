<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
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
		$this->load->model('mdata');
		$this->load->model('MCategory', 'category');
	}

	public function lists()
	{
		$data['berita'] = $this->mdata->all_berita()->result();
		$this->load->view('admin/berita', $data);
	}

	public function show($id)
	{
		$data['berita'] = $this->mdata->idberita($id)->row();
		if ($data['berita']) {
			$this->load->view('admin/beritaadmin', $data);
		} else {
			redirect('admin/berita');
		}
	}

	public function create()
	{
		$this->form_validation->set_rules('judul', 'Judul Berita', 'required');
		$this->form_validation->set_rules('category_id', 'Kategori Berita', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Berita', 'required');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required');
		$this->form_validation->set_rules('user_id', 'User ID', 'required');

		$data['author'] = $this->mdata->getAllAdmin();
		$data['categories'] = $this->category->getAll();

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addBerita', $data);
		} else {
			$user_id = $this->input->post('user_id') ? $this->input->post('user_id') : $this->session->userdata('user_id');
			$data = array(
				'judul' 			=> $this->input->post('judul'),
				'category_id' 		=> $this->input->post('category_id'),
				'user_id' 			=> $user_id,
				'tgl' 				=> $this->input->post('tgl'),
				'isi' 				=> $this->input->post('isi'),
				'file' 				=> $this->input->post('file'),
				'file2'         	=> $this->input->post('file2'),
			);

			$config['upload_path']          = './assets/images/berita/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('file');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = $config['upload_path'] . $name;
			}

			$config['upload_path']          = './assets/file/berita/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			$this->upload->do_upload('file2');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file2'] = $config['upload_path'] . $name;
			}

			if ($data) {
				$this->mdata->insertberita($data);
				$this->session->set_flashdata('message', 'Berhasil disimpan');
			}

			redirect(site_url('admin/berita'));
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('judul', 'Judul Berita', 'required');
		$this->form_validation->set_rules('category_id', 'Kategori Berita', 'required');
		$this->form_validation->set_rules('tgl', 'Tanggal Berita', 'required');
		$this->form_validation->set_rules('isi', 'Isi Berita', 'required');
		$this->form_validation->set_rules('user_id', 'User ID', 'required');

		if ($this->form_validation->run() == false) {
			$data['author'] = $this->mdata->getAllAdmin();
			$data['berita'] = $this->mdata->idberita($id)->row();
			$data['categories'] = $this->category->getAll();
			$this->load->view('admin/editBerita', $data);
		} else {
			$user_id = $this->input->post('user_id') ? $this->input->post('user_id') : $this->session->userdata('user_id');

			$data = array(
				'id' 			=> $this->input->post('id'),
				'category_id' => $this->input->post('category_id'),
				'judul' 		=> $this->input->post('judul'),
				'tgl' 			=> $this->input->post('tgl'),
				'isi' 			=> $this->input->post('isi'),
				'user_id'  		=> $user_id
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


				if (file_exists($a)) {
					unlink($a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = $config['upload_path'] . $upload_data['file_name'];
				}
			}

			if ($_FILES['file2']['tmp_name'] != '') {

				$config['upload_path']          = './assets/file/berita/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file2'] = $this->mdata->idberita($id)->row();
				$a = $data['file2']->file2;


				if (file_exists($a)) {
					unlink($a);
				}

				$status = $this->upload->do_upload('file2');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file2'] = $config['upload_path'] . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->update_berita($id, $data);
			$this->session->set_flashdata('message', 'Berhasil disimpan');
			redirect(site_url('admin/berita'));
		}
	}

	public function delete($id)
	{
		$data['file'] = $this->mdata->idberita($id)->row();
		$a = $data['file']->file;
		$b = $data['file']->file2;
		unlink($a);
		unlink($b);
		$this->mdata->delete_berita($id);
		$this->session->set_flashdata('message', 'Berhasil dihapus');
		redirect(site_url('admin/berita'));
	}
}
