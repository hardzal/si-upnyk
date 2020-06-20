<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Skripsi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MSkripsi', 'skripsis');
	}

	public function lists()
	{
		$data['skripsi'] = $this->skripsis->getAll();
		$this->load->view('admin/skripsi', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addSkripsi');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "jpg|png|jpeg|gif|doc|docx|xls|pdf";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/file/skripsi/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/skripsi');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->skripsis->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/skripsi');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['skripsi'] = $this->skripsis->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editSkripsi', $data);
		} else {
			$data = [
			    'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "jpg|png|jpeg|gif|doc|docx|xls|pdf";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/file/skripsi/";
				$config['remove_spaces'] = false;
                
                $data['file'] = $this->skripsis->get($id);
                if (!deleteFile($data['file']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/skripsi');
				}
    			
				// if (!deleteFile($data['specialization']->image)) {
					
				// }

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/skripsi');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->skripsis->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/skripsi');
		}
	}

	public function delete($id)
	{
		$skripsi = $this->skripsis->get($id);
		if (!deleteFile($skripsi->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/skripsi');
		}

		if ($this->skripsis->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data Skripsi</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data Skripsi</div>');
		}

		redirect('admin/skripsi');
	}
}
