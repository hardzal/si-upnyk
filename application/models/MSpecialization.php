<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MSpecialization extends CI_Model
{
	private $table = "specialization";

	public function getAll()
	{
		return $this->db->get($this->table)->result_object();
	}

	public function getListDosen()
	{
		return $this->db->get('dosen')->result_object();
	}

	public function getActive()
	{
		return $this->db->get_where($this->table, ['status' => 1])->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where($this->table, ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table, $data);
	}

	public function update($data, $id)
	{
		return $this->db->update($this->table, $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete($this->table, ['id' => $id]);
	}

	public function getDosen($specialization_id)
	{
		return $this->db->get_where('dosen_specialization', ['specialization_id' => $specialization_id])->result_object();
	}

	public function insertDosen($data)
	{
		return $this->db->insert('dosen_specialization', $data);
	}

	public function deleteDosen($specialization_id)
	{
		return $this->db->delete('dosen_specialization', ['specialization_id' => $specialization_id]);
	}
}
