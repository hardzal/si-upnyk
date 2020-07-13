<?php

class Tendik extends CI_Controller
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

	public function lists()
	{
		$data['tendik'] = $this->mdata->tendik()->result();
		$this->load->view('admin/tendik', $data);
	}

	public function show($id)
	{
		$data['tendik'] = $this->mdata->idtendik($id)->row();
		$this->load->view('admin/detailTendik', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addTendik');
		} else {
			$data = array(
				'nik' 						=> $this->input->post('nik'),
				'nama' 						=> $this->input->post('nama'),
				'email'						=> $this->input->post('email'),
				'pelatihan' 				=> $this->input->post('pelatihan'),
				'file' 						=> $this->input->post('file')
			);

			$config['upload_path']          = './assets/images/staff';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|JPG|PNG';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$status = $this->upload->do_upload('file');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'images/staff/' . $name;
				$this->mdata->inserttendik($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan');
			}


			redirect(site_url('admin/tendik'));
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('nik', 'NIK', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');

		if ($this->form_validation->run() == false) {
			$data['tendik'] = $this->mdata->idtendik($id)->row();
			$this->load->view('admin/editTendik', $data);
		} else {

			$data = array(
				'nik' 						=> $this->input->post('nik'),
				'nama' 						=> $this->input->post('nama'),
				'email'						=> $this->input->post('email'),
				'pelatihan' 				=> $this->input->post('pelatihan')
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/images/staff/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|PNG|JPG';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->mdata->idtendik($id)->row();
				$a = $data['file']->file;


				if (file_exists('./assets/images/' . $a)) {
					unlink('./assets/images/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'images/staff/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->updatetendik($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('Admin/tendik'));
		}
	}

	public function delete($id)
	{
		$data['file'] = $this->mdata->idtendik($id)->row();
		$a = $data['file']->file;
		unlink('assets/' . $a);
		$this->mdata->deletetendik($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/tendik'));
	}
}
