<?php

class Struktur extends CI_Controller
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
		$this->load->model('mdata');
	}

	public function index()
	{
		$data['struktur'] = $this->mdata->struktur()->result();
		$this->load->view('admin/struktur', $data);
	}

	public function edit($id)
	{
		if ($this->form_validation->run() == false) {
			$data['struktur'] = $this->mdata->idstruktur($id)->row();
			$this->load->view('admin/editStruktur', $data);
		} else {
			$data = array(
				'id' 	=> $this->input->post('id')
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/images/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->mdata->idstruktur($id)->row();
				$a = $data['file']->file;


				if (file_exists('./assets/' . $a)) {
					unlink('assets/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'images/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->updateStruktur($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('Admin/struktur'));
		}
	}
}
