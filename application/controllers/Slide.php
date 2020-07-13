<?php

class Slide extends CI_Controller
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
		$data['slide'] = $this->mdata->all_slide()->result();
		$this->load->view('admin/slide', $data);
	}

	public function create()
	{
		if (empty($_FILES['file']['tmp_name'])) {
			$this->form_validation->set_rules('file', 'File', 'required');
		}
		$this->form_validation->set_rules('link', 'Link', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addSlide');
		} else {
			$data = array(
				'file'		 	=> $this->input->post('file'),
				'link' 		=> $this->input->post('link')
			);

			$config['upload_path']          = './assets/images/slide';
			$config['max_size']             = 10000;
			$config['allowed_types'] 		= 'jpg|png|jpeg|gif|mp4|3gp|mpeg|mpg';

			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			$status = $this->upload->do_upload('file');

			if ($data) {
				$upload_data = $this->upload->data();
				$name = $upload_data['file_name'];
				$data['file'] = 'slide/' . $name;
				$this->mdata->insertslide($data);
				$this->session->set_flashdata('notif', 'Berhasil disimpan, <a href="slide">Kembali.</a>');
			}


			redirect(site_url('admin/slide'));
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('link', 'Link', 'required');

		if ($this->form_validation->run() == false) {
			$data['slide'] = $this->mdata->idslide($id)->row();
			$this->load->view('admin/editSlide', $data);
		} else {
			$data = array(
				'link' 		=> $this->input->post('link')
			);

			if ($_FILES['file']['tmp_name'] != '') {

				$config['upload_path']          = './assets/images/slide/';
				$config['max_size']             = 10000;
				$config['allowed_types'] 		= 'jpg|png|jpeg';

				$this->load->library('upload');
				$this->upload->initialize($config);

				$id = $this->input->post('id');

				$data['file'] = $this->mdata->idslide($id)->row();
				$a = $data['file']->file;


				if (file_exists('./assets/images/' . $a)) {
					unlink('./assets/images/' . $a);
				}

				$status = $this->upload->do_upload('file');

				if ($status) {
					$upload_data = $this->upload->data();
					$data['file'] = 'slide/' . $upload_data['file_name'];
				}
			}

			$id = $this->input->post('id');
			$this->mdata->update_slide($id, $data);
			$this->session->set_flashdata('notif', 'Berhasil disimpan');
			redirect(site_url('admin/slide'));
		}
	}

	public function delete($id)
	{
		$data['file'] = $this->mdata->idslide($id)->row();
		$a = $data['file']->file;

		unlink('assets/images/' . $a);
		$this->mdata->delete_slide($id);
		$this->session->set_flashdata('notif', 'Berhasil dihapus, <a href="slide">Kembali.</a>');
		redirect(site_url('admin/slide'));
	}
}
