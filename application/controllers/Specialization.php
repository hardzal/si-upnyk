<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Specialization extends CI_Controller
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
		$this->load->model('MSpecialization', 'specialization');
	}

	public function lists()
	{
		$data['specializations'] = $this->specialization->getAll();
		$this->load->view('admin/specialization', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('description', 'description', 'min_Length[3]');
		$this->form_validation->set_rules('title', 'title', 'min_Length[3]');
		$this->form_validation->set_rules('dosen_id[]', 'dosen', 'required');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		$data['dosen'] = $this->specialization->getListDosen();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addSpecialization', $data);
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
				$config['upload_path'] = "./assets/images/perminatan/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/specialization');
				}

				$data['img'] = $config['upload_path'] . $config['file_name'];
			}
			$process = $this->specialization->insert($data);
			$specialization_id  = $this->db->insert_id();
			foreach ($this->input->post('dosen_id') as $dosen) {
				$data = [
					'specialization_id' => $specialization_id,
					'dosen_id' => $dosen
				];

				$this->specialization->insertDosen($data);
			}
			if ($process) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/specialization');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'required|min_Length[3]');
		$this->form_validation->set_rules('title', 'title', 'required|min_Length[3]');
		$this->form_validation->set_rules('dosen_id[]', 'dosen', 'required');

		$data['specialization'] = $this->specialization->get($id);
		$data['dosen'] = $this->specialization->getListDosen();

		if ($this->form_validation->run() == FALSE) {
			$dosen = $this->specialization->getDosen($id);
			$dosen_id = [];
			foreach ($dosen as $dsn) {
				$dosen_id[] = $dsn->dosen_id;
			}
			$data['dosen_id'] = $dosen_id;
			$this->load->view('admin/editSpecialization', $data);
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
				$config['upload_path'] = "./assets/images/perminatan/";
				$config['remove_spaces'] = false;

				$specialization = $this->specialization->get($id);

				if (!deleteFile($specialization->img)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/specialization');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/specialization');
				}

				$data['img'] = $config['upload_path'] . $config['file_name'];
			}
			$process = $this->specialization->update($data, $id);
			$specialization_id  = $id;
			$this->specialization->deleteDosen($specialization_id);

			foreach ($this->input->post('dosen_id') as $dosen) {
				$data = [
					'specialization_id' => $specialization_id,
					'dosen_id' => $dosen
				];

				$this->specialization->insertDosen($data);
			}

			if ($process) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/specialization');
		}
	}

	public function delete($id)
	{
		$specialization = $this->specialization->get($id);
		if (!deleteFile($specialization->img)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/galleries');
		}

		if ($this->specialization->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data perminatan</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data perminatan</div>');
		}

		redirect('admin/specialization');
	}
}
