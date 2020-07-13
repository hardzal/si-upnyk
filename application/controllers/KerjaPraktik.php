<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KerjaPraktik extends CI_Controller
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
		$this->load->model('MKerjaPraktik', 'kerjapraktiks');
	}

	public function lists()
	{
		$data['kps'] = $this->kerjapraktiks->getAll();
		$this->load->view('admin/kerja_praktik', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addKerjaPraktik');
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
				$config['upload_path'] = "./assets/file/kerja_praktik/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/kerja_praktik');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->kerjapraktiks->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/kerja_praktik');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['kp'] = $this->kerjapraktiks->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editKerjaPraktik', $data);
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
				$config['upload_path'] = "./assets/file/kerja_praktik/";
				$config['remove_spaces'] = false;
                
                $data['file'] = $this->kerjapraktiks->get($id);
                
    			
				if (!deleteFile($data['file']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/kerja_praktik');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/kerja_praktik');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->kerjapraktiks->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/kerja_praktik');
		}
	}

	public function delete($id)
	{
		$kerja_praktik = $this->kerjapraktiks->get($id);
		if (!deleteFile($kerja_praktik->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/kerja_praktik');
		}

		if ($this->kerjapraktiks->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data Kerja Praktik</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data Kerja Praktik</div>');
		}

		redirect('admin/kerja_praktik');
	}
}
