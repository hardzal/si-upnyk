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
		$this->load->model('MRoleAccess', 'role');
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
		$this->form_validation->set_rules('order', 'Urutan', 'required');
		$this->form_validation->set_rules('roles[]', 'Hak Akses', 'required');

		if ($this->form_validation->run() == false) {
			$data['total_menu'] = $this->menu->total();
			$data['roles'] = $this->role->getAll();
			$this->load->view('admin/addMenu', $data);
		} else {
			$urutan = $this->input->post('order');
			$menu = $this->menu->urutan($urutan);

			if ($menu) {
				$this->menu->updateUrutan(['urutan' => $urutan], $menu->id);
			}

			$data = [
				'menu' => $this->input->post('menu'),
				'icon' => $this->input->post('icon'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu'),
				'urutan' => $this->input->post('order')
			];

			$process = $this->menu->insert($data);
			$menu_id = $this->db->insert_id();

			foreach ($this->input->post('roles') as $role) {
				$data = [
					'menu_id' => $menu_id,
					'role_id' => $role
				];
				$process = $this->role->insertAccess($data);
			}
			
			if ($process) {
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
		$this->form_validation->set_rules('roles[]', 'Hak Akses', 'required');

		$data['menu_data'] = $this->menu->get($id);

		if ($this->form_validation->run() == false) {
			$data['total_menu'] = $this->menu->total();;
			$data['roles'] = $this->role->getAll();
			$menus = $this->role->getMenu($id);

			$role_id  = [];
			foreach ($menus as $menu) {
				$role_id[] = $menu->role_id;
			}
			$data['menu_roles'] = $role_id;
			$this->load->view('admin/editMenu', $data);
		} else {
			$urutan = $this->input->post('order');
			$menu = $this->menu->get($urutan);

			if ($menu) {
				$this->menu->updateUrutan(['urutan' => $urutan], $menu->id);
			}
			$data = [
				'menu' => $this->input->post('menu'),
				'icon' => $this->input->post('icon'),
				'url' => $this->input->post('url'),
				'is_active' => $this->input->post('is_active'),
				'has_submenu' => $this->input->post('has_submenu'),
				'urutan' => $this->input->post('order')
			];

			$process = $this->menu->update($data, $id);
			$this->role->delete('role_menus', ['menu_id' => $id]);

			foreach ($this->input->post('roles') as $role) {
				$data = [
					'menu_id' => $id,
					'role_id' => $role
				];
				$this->role->insertAccess($data);
			}

			if ($process) {
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
