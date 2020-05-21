<?php

class Gallery extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MGallery', 'gallery');
	}

	public function list()
	{
		$data['galleries'] = $this->gallery->getAll();
		$this->load->view('admin/gallery', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('keterangan', 'keterangan', 'min_Length[3]');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addGallery');
		} else {
			$data = [
				'keterangan' => $this->input->post('keterangan', true),
				'status' => $this->input->post('status', true) ?? 0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/gallery/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/galleries');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->gallery->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/galleries');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('keterangan', 'keterangan', 'min_Length[3]');
		$data['gallery'] = $this->gallery->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editGallery', $data);
		} else {
			$data = [
				'keterangan' => $this->input->post('keterangan', true),
				'status' => $this->input->post('status', true) ?? 0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/gallery/";
				$config['remove_spaces'] = false;

				if (!deleteFile($data['gallery']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/galleries');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/galleries');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->gallery->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/galleries');
		}
	}

	public function delete($id)
	{
		$gallery = $this->gallery->get($id);
		if (!deleteFile($gallery->image)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/galleries');
		}

		if ($this->gallery->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data gallery</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data gallery</div>');
		}

		redirect('admin/galleries');
	}
}
