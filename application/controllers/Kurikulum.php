<?php

class Kurikulum extends CI_Controller
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
		$this->load->model('MKurikulum', 'kurikulum');
	}

	//kurikulum
	public function lists()
	{
		$data['kurikulum'] = $this->kurikulum->getAll();
		$this->load->view('admin/kurikulum', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}


		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addKurikulumFile');
		} else {
			$data = [
				'tahun' => $this->input->post('tahun'),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0
			];

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['upload_path']          = './assets/file/kurikulum/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/kurikulum');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->kurikulum->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}
			
			redirect('admin/kurikulum');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() == false) {
			$data['kurikulum'] = $this->kurikulum->get($id);
			$this->load->view('admin/editKurikulum', $data);
		} else {
			$data = array(
				'tahun' => $this->input->post('tahun'),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0
			);

			if ($_FILES['file']['tmp_name'] != '') {
				$config['upload_path']          = './assets/file/kurikulum/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->kurikulum->get($id);
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

			$id = $this->input->post('id');
			$this->kurikulum->update($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');

			redirect(site_url('admin/kurikulum'));
		}
	}

	public function delete($id)
	{
		$kurikulum = $this->kurikulum->get($id);

		if (!deleteFile($kurikulum->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/kurikulum');
		}

		if ($this->kurikulum->delete($id)) {
			$this->session->set_flashdata('notif', 'Berhasil dihapus');
		} else {
			$this->session->set_flashdata('notif', 'Gagal dihapus');
		}
		redirect(site_url('admin/kurikulum'));
	}
}
