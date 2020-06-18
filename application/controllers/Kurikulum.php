<?php

class Kurikulum extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
				'id' 	=> $this->input->post('id'),
				'tahun' => $this->input->post('tahun')
			);

			if ($_FILES['file']['tmp_name'] != '') {
				$config['upload_path']          = './assets/file/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|doc|docx|xls|pdf';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->kurikulum->get($id);
				$a = $data['file']->file;

				if (file_exists('./assets/file/' . $a)) {
					unlink('assets/file/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'kurikulum/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->update($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');

			redirect(site_url('Admin/kurikulum'));
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
