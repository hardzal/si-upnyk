<?php
defined('BASEPATH') or exit('No direct script access allowed');

class OrganisasiMahasiswa extends CI_Controller
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
		$this->load->model('MOrganisasiMahasiswa', 'organisasi');
	}

	public function lists()
	{
		$data['organisasi'] = $this->organisasi->getAll();
		$this->load->view('admin/organisasi_mahasiswa', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('Keterangan', 'description', 'min_Length[3]');
		if (empty($_FILES['image']['tmp_name'])) {
			$this->form_validation->set_rules('image', 'Image', 'required');
		}

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/addOrganisasiMahasiswa');
		} else {
			$data = [
				'title' => $this->input->post('title', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/organisasi/mahasiswa/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/organisasi_mahasiswa');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->organisasi->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/organisasi_mahasiswa');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('description', 'keterangan', 'min_Length[3]');
		$data['organisasi'] = $this->organisasi->get($id);

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('admin/editOrganisasiMahasiswa', $data);
		} else {
			$data = [
			    'title' => $this->input->post('title', true),
				'status' => $this->input->post('status', true) ? $this->input->post('status', true) :  0
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/organisasi/mahasiswa/";
				$config['remove_spaces'] = false;
				
                $data['image'] = $this->organisasi->get($id);
				if (!deleteFile($data['image']->image)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/organisasi_mahasiswa');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/organisasi_mahasiswa');
				}

				$data['image'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->organisasi->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/organisasi_mahasiswa');
		}
	}

	public function delete($id)
	{
		$organisasi = $this->organisasi->get($id);
		if (!deleteFile($organisasi->image)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/organisasi_mahasiswa');
		}

		if ($this->organisasi->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data Organisasi Mahasiswa</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data Organisasi Mahasiswa</div>');
		}

		redirect('admin/organisasi_mahasiswa');
	}
}
