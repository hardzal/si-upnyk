<?php

class Category extends CI_Controller
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
		$this->load->model('MCategory', 'category');
	}

	public function lists()
	{
		$data['categories'] = $this->category->getAll();
		$this->load->view('admin/category', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|min_Length[3]');
		$this->form_validation->set_rules('description', 'Keterangan', 'min_Length[3]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addCategory');
		} else {
			$data = [
				'name' => $this->input->post('name', true),
				'description' => $this->input->post('description', true),
			];

			if ($this->category->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/category');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('name', 'Nama', 'required|min_Length[3]');
		$this->form_validation->set_rules('description', 'Keterangan', 'min_Length[3]');

		$data['category'] = $this->category->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editCategory', $data);
		} else {
			$data = [
				'name' => $this->input->post('name', true),
				'description' => $this->input->post('description', true),
			];

			if ($this->category->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/category');
		}
	}

	public function delete($id)
	{
		if ($this->category->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data</div>');
		}

		redirect('admin/category');
	}
}
