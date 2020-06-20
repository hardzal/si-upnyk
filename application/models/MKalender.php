<?php

class MKalender extends CI_Model
{
	//Kalendar akademik
	function getAll()
	{
		$this->db->select('*');
		$this->db->from('kalendar');
		$this->db->order_by('id', 'desc');
		return $this->db->get()->result_object();
	}

	function get($id)
	{
		$this->db->select('*');
		$this->db->from('kalendar');
		$this->db->where('id', $id);
		return $this->db->get()->row_object();
	}

	function insert($data)
	{
		return $this->db->insert('kalendar', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('kalendar', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('kalendar');
	}
}
