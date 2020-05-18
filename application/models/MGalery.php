<?php
defined('BASEPATH') or exit('No direct script access allowed');

class MGalery extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('galleries')->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('galleries', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('galleries', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('galleries', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('galleries', ['id' => $id]);
	}
}
