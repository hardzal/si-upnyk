<?php

class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Event_model', 'event');
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
				'status' => $this->input->post('status', true)
			];

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
				'status' => $this->input->post('status', true)
			];

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
		if ($this->event->delete($id)) {
			$this->session->set_flashdata("message", '<div class="alert alert-success">Berhasil menghapus data agenda</div>');
		} else {
			$this->session->set_flashdata("message", '<div class="alert alert-danger">Gagal menghapus data agenda</div>');
		}

		redirect('admin/agenda');
	}
}
