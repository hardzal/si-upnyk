<?php

class Dosen extends CI_Controller
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
		$data['dosen'] = $this->mdata->dosen()->result();
		$this->load->view('admin/dosen', $data);
	}

	public function show($id)
	{
		$data['dosen'] = $this->mdata->iddosen($id)->row();
		$this->load->view('admin/detailDosen', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required');
		$this->form_validation->set_rules('nama', 'Nama', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('bidang', 'Bidang', 'required');
		$this->form_validation->set_rules('pendidikan', 'Pendidikan', 'required');
		$this->form_validation->set_rules('penelitian', 'Penelitian', 'required');
		$this->form_validation->set_rules('pengabdian', 'Pengabdian', 'required');
		$this->form_validation->set_rules('pelatihan', 'Pelatihan', 'required');
		$this->form_validation->set_rules('matkul', 'Mata Kuliah', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addDosen');
		} else {
			$data = array(
				'nip' 						=> $this->input->post('nip'),
				'nama' 						=> $this->input->post('nama'),
				'email'						=> $this->input->post('email'),
				'bidang' 					=> $this->input->post('bidang'),
				'pendidikan' 				=> $this->input->post('pendidikan'),
				'penelitian' 				=> $this->input->post('penelitian'),
				'pengabdian' 				=> $this->input->post('pengabdian'),
				'pelatihan' 				=> $this->input->post('pelatihan'),
				'file' 						=> $this->input->post('file'),
				'matkul'                    => $this->input->post('matkul'),
			);

			$config['upload_path']          = './assets/images/dosen/';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$status = $this->upload->do_upload('file');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'dosen/' . $name;
				$this->mdata->insertdosen($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan');
			}


			redirect(site_url('admin/dosen'));
		}
	}

	public function edit($id)
	{
		if ($this->form_validation->run() == false) {
			$data['dosen'] = $this->mdata->iddosen($id)->row();
			$this->load->view('admin/editDosen', $data);
		} else {
			$data = array(
				'nip' 						=> $this->input->post('nip'),
				'nama' 						=> $this->input->post('nama'),
				'email'						=> $this->input->post('email'),
				'bidang' 					=> $this->input->post('bidang'),
				'pendidikan' 				=> $this->input->post('pendidikan'),
				'penelitian' 				=> $this->input->post('penelitian'),
				'pengabdian' 				=> $this->input->post('pengabdian'),
				'pelatihan' 				=> $this->input->post('pelatihan'),
				'matkul'                    => $this->input->post('matkul'),
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/images/dosen/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->mdata->iddosen($id)->row();
				$a = $data['file']->file;


				if (file_exists('./assets/images/' . $a)) {
					unlink('assets/images/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'dosen/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->updateDosen($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('admin/dosen'));
		}
	}

	public function delete($id)
	{
		$data['file'] = $this->mdata->iddosen($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->deleteDosen($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus');
		redirect(site_url('admin/dosen'));
	}
}
