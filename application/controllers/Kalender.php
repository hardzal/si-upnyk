<?php

class Kalender extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MKalender', 'kalender');
	}

	//Akademik
	public function lists()
	{
		$data['kalender'] = $this->kalender->getAll();
		$this->load->view('admin/akademik', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addKalender');
		} else {
			$data = [
				'tahun' => $this->input->post('tahun'),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['upload_path']          = './assets/file/kalender/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/kalender');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->kalender->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/kalender');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('tahun', 'Tahun', 'required');
		$this->form_validation->set_rules('status', 'Status', 'required');

		if ($this->form_validation->run() == false) {
			$data['kalender'] = $this->kalender->get($id);
			$this->load->view('admin/editAkademik', $data);
		} else {
			$data = array(
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) : 0,
				'tahun' => $this->input->post('tahun')
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/file/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->kalender->get($id);
				$a = $data['file']->file;


				if (file_exists('./assets/' . $a)) {
					unlink('assets/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'kalender/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->kalender->update($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('admin/kalender'));
		}
	}

	public function delete($id)
	{
		$kalender = $this->kalender->get($id);

		if (!deleteFile($kalender->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/kalender');
		}

		if ($this->kalender->delete($id)) {
			$this->session->set_flashdata('notif', 'Berhasil dihapus');
		} else {
			$this->session->set_flashdata('notif', 'Gagal dihapus');
		}
		redirect(site_url('admin/kalender'));
	}
}
