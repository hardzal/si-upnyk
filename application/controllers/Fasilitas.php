<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fasilitas extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MFasilitas', 'fasilitas');
	}

	public function lists()
	{
		$data['fasilitas'] = $this->fasilitas->getAll();
		$this->load->view('admin/fasilitas', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addFasilitas');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/fasilitas/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/fasilitas');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->fasilitas->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/fasilitas');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['fasilitas'] = $this->fasilitas->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editFasilitas', $data);
		} else {
			$data = [
			    'title' => $this->input->post('title', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/perminatan/";
				$config['remove_spaces'] = false;
				
                $data['image'] = $this->fasilitas->get($id);
				if (!deleteFile($data['image']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/fasilitas');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/fasilitas');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->fasilitas->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/fasilitas');
		}
	}

	public function delete($id)
	{
		$fasilitas = $this->fasilitas->get($id);
		if (!deleteFile($fasilitas->image)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/fasilitas');
		}

		if ($this->fasilitas->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data fasilitas</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data fasilitas</div>');
		}

		redirect('admin/fasilitas');
	}
}
