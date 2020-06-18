<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MTriDharma extends CI_Model
{
	private $table_pengajaran = "tridharma_pengajaran";
	private $table_penelitian = "tridharma_penelitian";
	private $table_pengabdian = "tridharma_pengabdian";

// Pengajaran
	public function getAll()
	{
		return $this->db->get($this->table_pengajaran)->result_object();
	}

	public function getPengajaranActive()
	{
		return $this->db->get_where($this->table_pengajaran, ['status' => 1])->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where($this->table_pengajaran, ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert($this->table_pengajaran, $data);
	}

	public function update($data, $id)
	{
		return $this->db->update($this->table_pengajaran, $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete($this->table_pengajaran, ['id' => $id]);
	}
	
// 	Penelitian
    public function getAllPenelitian()
	{
		return $this->db->get($this->table_penelitian)->result_object();
	}

	public function getPenelitianActive()
	{
		return $this->db->get_where($this->table_penelitian, ['status' => 1])->result_object();
	}

	public function getPenelitian($id)
	{
		return $this->db->get_where($this->table_penelitian, ['id' => $id])->row_object();
	}

	public function insertPenelitian($data)
	{
		return $this->db->insert($this->table_penelitian, $data);
	}

	public function updatePenelitian($data, $id)
	{
		return $this->db->update($this->table_penelitian, $data, ['id' => $id]);
	}

	public function deletePenelitian($id)
	{
		return $this->db->delete($this->table_penelitian, ['id' => $id]);
	}


// 	Pengabdian
    public function getAllPengabdian()
	{
		return $this->db->get($this->table_pengabdian)->result_object();
	}

	public function getPengabdianActive()
	{
		return $this->db->get_where($this->table_pengabdian, ['status' => 1])->result_object();
	}

	public function getPengabdian($id)
	{
		return $this->db->get_where($this->table_pengabdian, ['id' => $id])->row_object();
	}

	public function insertPengabdian($data)
	{
		return $this->db->insert($this->table_pengabdian, $data);
	}

	public function updatePengabdian($data, $id)
	{
		return $this->db->update($this->table_pengabdian, $data, ['id' => $id]);
	}

	public function deletePengabdian($id)
	{
		return $this->db->delete($this->table_pengabdian, ['id' => $id]);
	}
}
