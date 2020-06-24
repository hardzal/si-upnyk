<?php

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MUser', 'user');
	}

	public function lists()
	{
		$data['users'] = $this->user->getAll();
		$this->load->view('admin/user', $data);
	}

	public function checkUsername($id)
	{
	}

	public function create()
	{
		$this->form_validation->set_rules('username', 'Username', 'required|min_Length[3]|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_Length[3]');
		$this->form_validation->set_rules('password_repeat', 'Ulangi Password', 'required|min_Length[3]|matches[password]');
		$this->form_validation->set_rules('role_id', 'Role', 'required');

		$data['roles'] = $this->user->getRoles();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addUser', $data);
		} else {
			$data = [
				'username' => $this->input->post('username'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'role_id' => $this->input->post('role_id')
			];

			if ($this->user->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/user');
		}
	}

	public function edit($id)
	{
		// $this->form_validation->set_rules('username', 'Username', 'required|min_Length[3]|is_unique[admin.username]');
		$this->form_validation->set_rules('password', 'Password', 'min_Length[3]');
		$this->form_validation->set_rules('password_repeat', 'Ulangi Password', 'min_Length[3]|matches[password]');
		$this->form_validation->set_rules('role_id', 'Role', 'required');

		$data['roles'] = $this->user->getRoles();
		$data['user'] = $this->user->get($id);
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editUser', $data);
		} else {

			$data = [
				// 'username' => $this->input->post('username'),
				'role_id' => $this->input->post('role_id')
			];

			if ($this->input->post('password')) {
				$data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
			}

			if ($this->user->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/user');
		}
	}

	public function delete($id)
	{
		if ($this->user->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data user</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data user</div>');
		}

		redirect('admin/user');
	}
}
