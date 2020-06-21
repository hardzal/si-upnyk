<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alumni extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MAlumni', 'alumnis');
	}

	public function lists()
	{
		$data['alumni'] = $this->alumnis->getAll();
		$this->load->view('admin/alumni', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addAlumni');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/images/alumni/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/alumni');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->alumnis->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/alumni');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['alumni'] = $this->alumnis->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editAlumni', $data);
		} else {
			$data = [
			    'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 10000;
				$config['upload_path'] = "./assets/images/alumni/";
				$config['remove_spaces'] = false;
                
                $data['image'] = $this->alumnis->get($id);
                if (!deleteFile($data['image']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/alumni');
				}
    			
				// if (!deleteFile($data['specialization']->image)) {
					
				// }

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload Gambar!<br>' . $error . '</div>');
					redirect('admin/alumni');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->alumnis->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/alumni');
		}
	}

	public function delete($id)
	{
		$alumni = $this->alumnis->get($id);
		if (!deleteFile($alumni->image)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/alumni');
		}

		if ($this->alumnis->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data Alumni</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data Alumni</div>');
		}

		redirect('admin/alumni');
	}
}
