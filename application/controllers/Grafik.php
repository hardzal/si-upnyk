<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Grafik extends CI_Controller
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
		$this->load->model('MGrafik', 'grafik');
	}

	public function lists()
	{
		$data['grafik'] = $this->grafik->getAllGrafik();
		$this->load->view('admin/grafik', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('type', 'type', 'min_Length[3]');
		$this->form_validation->set_rules('title', 'title', 'min_Length[3]');
// 		$this->form_validation->set_rules('pengampu', 'dosen', 'required');
// 		$this->form_validation->set_rules('koordinator', 'koordinator', 'required');
// 		$this->form_validation->set_rules('anggota', 'anggota', 'required');
		
// 		if (empty($_FILES['image']['tmp_name'])) {
// 			$this->form_validation->set_rules('image', 'Image', 'required');
// 		}

// 		$data['dosen'] = $this->specialization->getListDosen();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addGrafik');
		} else {
			$data = [
			 //   'koordinator' => $this->input->post('koordinator', true),
			 //   'anggota' => $this->input->post('anggota', true),
				// 'pengampu' => $this->input->post('pengampu', true),
				'title' => $this->input->post('title', true),
				'type' => $this->input->post('type', true),
				// 'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

// 			if ($_FILES['image']['tmp_name']) {
// 				$config['file_name'] = changeFileName($_FILES['image']);
// 				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
// 				$config['max_size'] = 2048;
// 				$config['upload_path'] = "./assets/images/perminatan/";
// 				$config['remove_spaces'] = false;

// 				if (!uploadFile($config, 'image')) {
// 					$error = $this->upload->display_errors();
// 					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
// 					redirect('admin/specialization');
// 				}

// 				$data['img'] = $config['upload_path'] . $config['file_name'];
// 			}

			if ($this->grafik->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/grafik');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('type', 'type', 'required|min_Length[3]');
		$this->form_validation->set_rules('title', 'title', 'required|min_Length[3]');
// 		$this->form_validation->set_rules('pengampu', 'dosen', 'required');
// 		$this->form_validation->set_rules('koordinator', 'koordinator', 'required');
// 		$this->form_validation->set_rules('anggota', 'anggota', 'required');
		

		$data['grafik'] = $this->grafik->get($id);
// 		$data['dosen'] = $this->specialization->getListDosen();

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editGrafik', $data);
		} else {
			$data = [
			 //   'koordinator' => $this->input->post('koordinator', true),
			 //   'anggota' => $this->input->post('anggota', true),
				// 'pengampu' => $this->input->post('pengampu', true),
				'title' => $this->input->post('title', true),
				'type' => $this->input->post('type', true),
				// 'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

// 			if ($_FILES['image']['tmp_name']) {
// 				$config['file_name'] = changeFileName($_FILES['image']);
// 				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
// 				$config['max_size'] = 2048;
// 				$config['upload_path'] = "./assets/images/perminatan/";
// 				$config['remove_spaces'] = false;
// 					$specialization =  $this->specialization->get($id);

// 				if (!deleteFile($specialization->img)) {
// 					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
// 					redirect('admin/specialization');
// 				}

// 				if (!uploadFile($config, 'image')) {
// 					$error = $this->upload->display_errors();
// 					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
// 					redirect('admin/specialization');
// 				}

// 				$data['img'] = $config['upload_path'] . $config['file_name'];
// 			}

			if ($this->grafik->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/grafik');
		}
	}

	public function delete($id)
	{
// 		$grafik = $this->grafik->get($id);
// 		if (!deleteFile($grafik->img)) {
// 			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
// 			redirect('admin/galleries');
// 		}

		if ($this->grafik->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data perminatan</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data perminatan</div>');
		}

		redirect('admin/grafik');
	}
	
// 	ISI GRAFIK
	public function lists_isi($id_grafik)
	{
	    $data['grafik'] = $this->grafik->get($id_grafik);
		$data['isi_grafik'] = $this->grafik->getAllIsibyId($id_grafik);
		$this->load->view('admin/grafik_isi', $data);
	}

	public function create_isi($id_grafik)
	{
		$this->form_validation->set_rules('variable', 'variable', 'min_Length[3]');
		$this->form_validation->set_rules('value', 'value', 'min_Length[1]');

		if ($this->form_validation->run() == FALSE) {
	        $graf['grafik'] = $this->grafik->get($id_grafik);
			$this->load->view('admin/addGrafikIsi',$graf);
		} else {
			$data = [
				'id_grafik'     => $this->input->post('id_grafik', true),
				'variable_name' => $this->input->post('variable', true),
				'value'         => $this->input->post('value', true),
				// 'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($this->grafik->insert_isi($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/grafik/isi/'. $id_grafik);
		}
	}

	public function edit_isi($id_grafik,$id)
	{
		$this->form_validation->set_rules('variable', 'variable', 'min_Length[3]');
		$this->form_validation->set_rules('value', 'value', 'min_Length[1]');
		
        // $graf['grafik'] = $this->grafik->get($id_grafik);
		

		if ($this->form_validation->run() == FALSE) {
		    $data['grafik'] = $this->grafik->get_isi_id($id);
			$this->load->view('admin/editGrafikIsi', $data);
		} else {
			$data = [
				'variable_name' => $this->input->post('variable', true),
				'value' => $this->input->post('value', true),
			];


			if ($this->grafik->update_isi($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/grafik/isi/'. $id_grafik  );
		}
	}

	public function delete_isi($id_grafik, $id)
	{

		if ($this->grafik->delete_isi($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data perminatan</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data perminatan</div>');
		}

		redirect('admin/grafik/isi/' . $id_grafik);
	}
}
