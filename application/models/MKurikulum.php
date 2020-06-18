<?php

class MKurikulum extends CI_Model
{
	//KURIKULUM
	function getAll()
	{
		$this->db->select('*');
		$this->db->from('kurikulum');
		$this->db->order_by('id', 'desc');
		return $this->db->get()->result_object();
	}

	function get($id)
	{
		$this->db->select('*');
		$this->db->from('kurikulum');
		$this->db->where('id', $id);
		return $this->db->get()->row_object();
	}

	function insert($data)
	{
		return $this->db->insert('kurikulum', $data);
	}

	function update($id, $data)
	{
		$this->db->where('id', $id);
		return $this->db->update('kurikulum', $data);
	}

	function delete($id)
	{
		$this->db->where('id', $id);
		return $this->db->delete('kurikulum');
	}
}
