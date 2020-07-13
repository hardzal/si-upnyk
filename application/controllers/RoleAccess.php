<?php

class RoleAccess extends CI_Controller
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
		$this->load->model('MRoleAccess', 'roleaccess');
	}

	public function lists()
	{
		// list roles 
		// tampilkan role beserta accessnya
		$data['roles_access'] = $this->roleaccess->getAll();
		$this->load->view('admin/roleaccess_menu', $data);
	}

	public function create()
	{
		// create new role
		// and add access menu 
		$this->form_validation->set_rules('role', 'Role', 'required');
		// $this->form_validation->set_rules('');

		if ($this->form_validation->run() == false) {
			$data['menus'] = $this->menu->getAll();
			$this->load->view('admin/addRoleAccess', $data);
		} else {

			$data = [
				'role' => strtolower($this->input->post('role', true))
			];

			$menus = $this->input->post('menu');

			$process = $this->roleaccess->insert($data);
			$role_id = $this->db->insert_id();

			foreach ($menus as $menu) {
				$data_access = [
					'role_id' => $role_id,
					'menu_id' => $menu
				];

				$this->roleaccess->insertAccess($data_access);
			};

			if ($process) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Gagal menambahkan data</div>');
			}

			redirect('admin/roleaccess');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('role', 'Role', 'required');
		$this->form_validation->set_rules('menu[]', 'Menu', 'required');
		$this->form_validation->set_rules('role_id[]', 'Role ID', 'required');

		if ($this->form_validation->run() == false) {
			$data['menus_data'] = $this->menu->getAll();
			$role_access = $this->roleaccess->getAccess($id);
			$role_menus = [];

			foreach ($role_access as $access) {
				$role_menus[] = $access->menu_id;
			}

			$data['role'] = $this->roleaccess->get($id);
			$data['role_access'] = $role_menus;
			$this->load->view('admin/editRoleAccess', $data);
		} else {
			$data = [
				'role' => $this->input->post('role', true)
			];
			$role_id = $this->input->post('role_id', true);
			$menus = $this->input->post('menu');

			$this->roleaccess->delete('role_menus', ['role_id' => $role_id]);

			foreach ($menus as $menu) {
				$data_access = [
					'role_id' => $role_id,
					'menu_id' => $menu
				];

				$this->roleaccess->insertAccess($data_access);
			};

			$process = $this->roleaccess->update($data, $id);

			if ($process) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}


			redirect('admin/roleaccess');
		}
	}

	public function delete($id)
	{
		// delete role and access
		$process = $this->roleaccess->delete('roles', ['id' => $id]) && $this->roleaccess->delete('role_menus', ['role_id' => $id]);

		if ($process) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data perminatan</div>');
		}

		redirect('admin/roleaccess');
	}
}
