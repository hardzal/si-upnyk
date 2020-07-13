<?php

class MWisuda extends CI_Model
{
	public function getAll()
	{
		return $this->db->get('wisuda')->result_object();
	}
	
	public function getActive()
	{
		return $this->db->get_where('wisuda', ['status' => 1])->result_object();
	}

	public function get($id)
	{
		return $this->db->get_where('wisuda', ['id' => $id])->row_object();
	}

	public function insert($data)
	{
		return $this->db->insert('wisuda', $data);
	}

	public function update($data, $id)
	{
		return $this->db->update('wisuda', $data, ['id' => $id]);
	}

	public function delete($id)
	{
		return $this->db->delete('wisuda', ['id' => $id]);
	}
}
