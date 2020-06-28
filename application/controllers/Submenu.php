<?php

class SubMenu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function lists()
	{
		$data['submenus_data'] = $this->submenu->getAll();
		$this->load->view('admin/submenu', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('submenu', 'Submenu', 'required|min_length[3]');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('is_active', 'Status', 'required');
		$this->form_validation->set_rules('has_submenu', 'Punya Submenu?', 'required');

		if ($this->form_validation->run() == false) {
			$data['menus_data'] = $this->submenu->getAllMenu();
			$this->load->view('admin/addSubMenu', $data);
		} else {
			$data = [
				'submenu' => $this->input->post('submenu'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu')
			];

			if ($this->submenu->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/menu');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('submenu', 'Submenu', 'required|min_length[3]');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('is_active', 'Status', 'required');
		$this->form_validation->set_rules('has_submenu', 'Punya Submenu?', 'required');

		if ($this->form_validation->run() == false) {
			$data['submenu_data'] = $this->submenu->get($id);
			$data['menus_data'] = $this->submenu->getAllMenu($id);
			$this->load->view('admin/editSubMenu', $data);
		} else {
			$data = [
				'submenu' => $this->input->post('submenu'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu')
			];

			if ($this->submenu->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/menu');
		}
	}

	public function delete($id)
	{
		if ($this->submenu->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data</div>');
		}

		redirect('admin/submenu');
	}
}
