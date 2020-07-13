<?php
defined('BASEPATH') or exit('No direct script access allowed');

class InformasiAkademik extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('username') == NULL) {
			redirect('login/logout');
			exit();
		}
		$this->load->model('MAkademik', 'akademik');
	}

	public function lists()
	{
		$data['akademik'] = $this->akademik->getAll();
		$this->load->view('admin/akademik', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addInformasiAkademik');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/images/akademik/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/file');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->akademik->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/akademik');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['akademik'] = $this->akademik->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editInformasiAkademik', $data);
		} else {
			$data = [
			    'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/images/akademik/";
				$config['remove_spaces'] = false;
                
                $data['file'] = $this->prestasi->get($id);
                if (!deleteFile($data['file']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/akademik');
				}
    			
				// if (!deleteFile($data['specialization']->image)) {
					
				// }

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload Gambar!<br>' . $error . '</div>');
					redirect('admin/akademik');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->akademik->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/akademik');
		}
	}

	public function delete($id)
	{
		$akademik = $this->akademik->get($id);
		if (!deleteFile($akademik->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/akademik');
		}

		if ($this->akademik->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data Informasi Akademik</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data Informasi Akademik</div>');
		}

		redirect('admin/akademik');
	}
}
