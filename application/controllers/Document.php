<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Document extends CI_Controller
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
	}

	public function lists()
	{
		$data['download'] = $this->mdata->download()->result();
		$this->load->view('admin/download', $data);
	}

	public function create()
	{
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addFile');
		} else {
			$data = array(
				'file'		 	=> '',
				'keterangan' 	=> $this->input->post('keterangan')
			);

			$config['upload_path']          = './assets/file';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|doc|docx|xls|pdf|ppt|pptx|rar|zip';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$status = $this->upload->do_upload('file');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'file/' . $name;
				$this->mdata->insert($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
			}

			redirect(site_url('admin/document'));
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('keterangan', 'Keterangan', 'required');

		if ($this->form_validation->run() == false) {
			$data['download'] = $this->mdata->iddwn($id)->row();
			$this->load->view('admin/editFile', $data);
		} else {
			$data = array(
				'id' 	              => $this->input->post('id'),
				'keterangan' 		=> $this->input->post('keterangan')
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/file';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|doc|docx|xls|pdf|ppt|pptx|rar|zip';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->mdata->iddwn($id)->row();
				$a = $data['file']->file;


				if (file_exists('./assets/' . $a)) {
					unlink('./assets/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'file/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->updatefile($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('admin/document'));
		}
	}

	public function delete($id)
	{
		$data['file'] = $this->mdata->iddwn($id)->row();
		$a = $data['file']->file;

		unlink('assets/' . $a);
		$this->mdata->deletedwn($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/document'));
	}
}
