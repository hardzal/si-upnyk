<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MLowker extends CI_Model
{
	private $table = "berita";

	public function getAll()
	{
		return $this->db->get_where($this->table, ['category_id' => 3])->result_object();
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
}
