<?php

class Wisuda extends CI_Controller
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
		$this->load->model('MWisuda', 'wisuda');
	}

	public function lists()
	{
		$data['wisuda'] = $this->wisuda->getAll();
		$this->load->view('admin/wisuda', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('title', 'Judul', 'min_Length[3]');
		$this->form_validation->set_rules('description', 'Keterangan', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addWisuda');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "doc|docx|pdf|xlsx|xls";
				$config['max_size'] = 5600;
				$config['upload_path'] = "./assets/file/wisuda/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/galleries');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->wisuda->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/wisuda');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('title', 'Judul', 'min_Length[3]');
		$this->form_validation->set_rules('description', 'Keterangan', 'min_Length[3]');

		$data['wisuda'] = $this->wisuda->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editWisuda', $data);
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "doc|docx|pdf|xlsx|xls";
				$config['max_size'] = 5600;
				$config['upload_path'] = "./assets/file/wisuda/";
				$config['remove_spaces'] = false;

				$wisuda = $this->wisuda->get($id);

				if (!deleteFile($wisuda->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/wisuda');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/wisuda');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->wisuda->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/wisuda');
		}
	}

	public function delete($id)
	{
		$wisuda = $this->wisuda->get($id);
		if (!deleteFile($wisuda->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/wisuda');
		}

		if ($this->wisuda->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data</div>');
		}

		redirect('admin/wisuda');
	}
}
