<?php

class Profile extends CI_Controller
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

	public function index()
	{
		$data['struk'] = $this->mdata->profil()->result();
		$this->load->view('admin/profil', $data);
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('sejarah', 'Sejarah', 'required');
		$this->form_validation->set_rules('visi', 'Visi', 'required');
		$this->form_validation->set_rules('misi', 'Misi', 'required');
		$this->form_validation->set_rules('tujuan', 'Tujuan', 'required');
		$this->form_validation->set_rules('sambutan', 'Sambutan', 'required');

		if ($this->form_validation->run() == false) {
			$data['profil'] = $this->mdata->idprofil($id)->row();
			$this->load->view('admin/editProfil', $data);
		} else {
			$data['id'] 		= $this->input->post('id');
			$data['sejarah']    = $this->input->post('sejarah');
			$data['visi'] 		= $this->input->post('visi');
			$data['misi'] 		= $this->input->post('misi');
			$data['tujuan'] 	= $this->input->post('tujuan');
			$data['sambutan']   = $this->input->post('sambutan');

			$id = $this->input->post('id');

			$this->mdata->updateprofil($id, $data);
			redirect(site_url('admin/profile'));
		}
	}
}
