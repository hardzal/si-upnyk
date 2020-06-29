<?php

class Menu extends CI_Controller
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
	}

	public function lists()
	{
		$data['menus_data'] = $this->menu->getAll();
		$this->load->view('admin/menu', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('menu', 'Menu', 'required|min_length[3]');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('is_active', 'Status', 'required');
		$this->form_validation->set_rules('has_submenu', 'Punya Submenu?', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addMenu');
		} else {
			$data = [
				'menu' => $this->input->post('menu'),
				'icon' => $this->input->post('icon'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu')
			];

			if ($this->menu->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/menu');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('menu', 'Menu', 'required|min_length[3]');
		$this->form_validation->set_rules('icon', 'Icon', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('is_active', 'Status', 'required');
		$this->form_validation->set_rules('has_submenu', 'Punya Submenu?', 'required');

		$data['menu_data'] = $this->menu->get($id);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/editMenu', $data);
		} else {
			$data = [
				'menu' => $this->input->post('menu'),
				'icon' => $this->input->post('icon'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu')
			];

			if ($this->menu->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/menu');
		}
	}

	public function delete($id)
	{
		if ($this->menu->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data</div>');
		}

		redirect('admin/menu');
	}
}
