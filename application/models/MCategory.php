<?php

class MCategory extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('category')->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('category', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('category', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('category', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('category', ['id' => $id]);
	}
}
