<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tridharma extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MTriDharma', 'tridharmas');
	}

	// Pengajaran
	public function list_pengajaran()
	{
		$data['tridharma'] = $this->tridharmas->getAll();
		$this->load->view('admin/tridharma_pengajaran', $data);
	}

	public function create_pengajaran()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addTridharmaPengajaran');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/pengajaran/";
				$config['remove_spaces'] = false;


				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/pengajaran');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/pengajaran');
		}
	}

	public function edit_pengajaran($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['tridharma'] = $this->tridharmas->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editTridharmaPengajaran', $data);
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/pengajaran/";
				$config['remove_spaces'] = false;

				if (!deleteFile($data['tridharma']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/pengajaran');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/pengajaran');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/pengajaran');
		}
	}

	public function delete_pengajaran($id)
	{
		$tridharma = $this->tridharmas->get($id);
		if (!deleteFile($tridharma->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/pengajaran');
		}

		if ($this->tridharmas->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data pengajaran</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data pengajaran</div>');
		}

		redirect('admin/pengajaran');
	}

	// 	Penelitian
	public function list_penelitian()
	{
		$data['tridharma'] = $this->tridharmas->getAllPenelitian();
		$this->load->view('admin/tridharma_penelitian', $data);
	}

	public function create_penelitian()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addTridharmaPenelitian');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/penelitian/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/penelitian');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->insertPenelitian($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/penelitian');
		}
	}

	public function edit_penelitian($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['tridharma'] = $this->tridharmas->getPenelitian($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editTridharmaPenelitian', $data);
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "doc|docx|pdf";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/penelitian/";
				$config['remove_spaces'] = false;

				if (!deleteFile($data['tridharma']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/penelitian');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/penelitian');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->updatePenelitian($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/penelitian');
		}
	}

	public function delete_penelitian($id)
	{
		$tridharma = $this->tridharmas->getPenelitian($id);
		if (!deleteFile($tridharma->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/penelitian');
		}

		if ($this->tridharmas->deletePenelitian($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data penelitian</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data penelitian</div>');
		}

		redirect('admin/penelitian');
	}

	// 	Pengabdian
	public function list_pengabdian()
	{
		$data['tridharma'] = $this->tridharmas->getAllPengabdian();
		$this->load->view('admin/tridharma_pengabdian', $data);
	}

	public function create_pengabdian()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addTridharmaPengabdian');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/tri_dharma/pengabdian/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/pengabdian');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "doc|docx|pdf";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/pengabdian/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/pengabdian');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->insertPengabdian($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/pengabdian');
		}
	}

	public function edit_pengabdian($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['tridharma'] = $this->tridharmas->getPengabdian($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editTridharmaPengabdian', $data);
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/tri_dharma/pengabdian/";
				$config['remove_spaces'] = false;

				if (!deleteFile($data['tridharma']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/pengabdian');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/pengabdian');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/tri_dharma/pengabdian/";
				$config['remove_spaces'] = false;

				if (!deleteFile($data['tridharma']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/pengabdian');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/pengabdian');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->tridharmas->updatePengabdian($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/pengabdian');
		}
	}

	public function delete_pengabdian($id)
	{
		$tridharma = $this->tridharmas->getPengabdian($id);
		if (!deleteFile($tridharma->image)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/pengabdian');
		}
		if (!deleteFile($tridharma->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/pengabdian');
		}

		if ($this->tridharmas->deletePengabdian($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data pengabdian</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data pengabdian</div>');
		}

		redirect('admin/pengabdian');
	}
}
