<?php

class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('MEvent', 'event');
	}

	public function list()
	{
		$data['events'] = $this->event->getAll();
		$this->load->view('admin/event', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');
		$this->form_validation->set_rules('tgl_start', 'Tanggal Mulai', 'required|trim');
		$this->form_validation->set_rules('time_start', 'Waktu Mulai', 'required|trim');
		$this->form_validation->set_rules('tgl_end', 'Tanggal Selesai', 'required|trim');
		$this->form_validation->set_rules('time_end', 'Waktu Selesai', 'required|trim');
		$this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/addEvent');
		} else {
			$data = [
				'user_id' => $this->input->post('user_id', true),
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'location' => $this->input->post('location', true),
				'time_start' => $this->input->post('tgl_start', true) . " " . $this->input->post('time_start', true),
				'time_end' => $this->input->post('tgl_end', true) . " " . $this->input->post('time_end', true),
				'status' => $this->input->post('status', true),
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|jpeg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/agenda/";
				$config['remove_spaces'] = false;

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/agenda');
				}

				$data['cover'] = $config['upload_path'] . $config['file_name'];
			}

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "doc|docx|pdf";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/agenda/";

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/agenda');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->event->insert($data)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil menambahkan data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menambahkan data</div>');
			}

			redirect('admin/agenda');
		}
	}

	public function edit($id)
	{
		$this->form_validation->set_rules('title', 'Judul', 'required|trim');
		$this->form_validation->set_rules('description', 'Deskripsi', 'required|trim');
		$this->form_validation->set_rules('tgl_start', 'Tanggal Mulai', 'required|trim');
		$this->form_validation->set_rules('time_start', 'Waktu Mulai', 'required|trim');
		$this->form_validation->set_rules('tgl_end', 'Tanggal Selesai', 'required|trim');
		$this->form_validation->set_rules('time_end', 'Waktu Selesai', 'required|trim');
		$this->form_validation->set_rules('location', 'Lokasi', 'required|trim');
		$this->form_validation->set_rules('status', 'Status', 'required|trim');

		$data['event'] = $this->event->get($id);

		if ($this->form_validation->run() == false) {
			$this->load->view('admin/editEvent', $data);
		} else {
			$data = [
				'user_id' => $this->input->post('user_id', true),
				'title' => $this->input->post('title', true),
				'description' => $this->input->post('description', true),
				'location' => $this->input->post('location', true),
				'time_start' => $this->input->post('tgl_start', true) . " " . $this->input->post('time_start', true),
				'time_end' => $this->input->post('tgl_end', true) . " " . $this->input->post('time_end', true),
				'status' => $this->input->post('status', true),
				'updated_at' => date('d-m-Y H:i:s', time())
			];

			if ($_FILES['image']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['image']);
				$config['allowed_types'] = "gif|jpg|png|jfif|bmp";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/images/agenda/";

				if (!deleteFile($data['event']->cover)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
					redirect('admin/agenda');
				}

				if (!uploadFile($config, 'image')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload gambar!<br>' . $error . '</div>');
					redirect('admin/agenda');
				}

				$data['cover'] = $config['upload_path'] . $config['file_name'];
			}

			if ($_FILES['file']['tmp_name']) {
				$config['file_name'] = changeFileName($_FILES['file']);
				$config['allowed_types'] = "pdf|doc|docx";
				$config['max_size'] = 2048;
				$config['upload_path'] = "./assets/file/agenda/";

				if (!deleteFile($data['event']->file)) {
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
					redirect('admin/agenda');
				}

				if (!uploadFile($config, 'file')) {
					$error = $this->upload->display_errors();
					$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal mengupload file!<br>' . $error . '</div>');
					redirect('admin/agenda');
				}

				$data['file'] = $config['upload_path'] . $config['file_name'];
			}

			if ($this->event->update($data, $id)) {
				$this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil memperbaharui data</div>');
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal memperbaharui data</div>');
			}

			redirect('admin/agenda');
		}
	}

	public function delete($id)
	{
		$event = $this->event->get($id);
		if (!deleteFile($event->cover)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus gambar sebelumnya!</div>');
			redirect('admin/agenda');
		}

		if (!deleteFile($event->file)) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger">Gagal menghapus file sebelumnya!</div>');
			redirect('admin/agenda');
		}

		if ($this->event->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data agenda</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data agenda</div>');
		}

		redirect('admin/agenda');
	}
}
