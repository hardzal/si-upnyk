<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Question extends CI_Controller
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
		$this->load->model('MQuestion', 'question');
	}

	public function lists()
	{
		$data['questions'] = $this->question->getAll();
		$this->load->view('admin/question', $data);
	}

	public function show($id)
	{
		$data['question'] = $this->question->get($id);
		$this->load->view('admin/detailQuestion', $data);
	}

	public function delete($id)
	{
		if ($this->question->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data pertanyaan</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data pertanyaan</div>');
		}

		redirect('admin/question');
	}
}
